<?php

namespace SimFreteApi\Model;

class RetornoModel {
    
    private $rawStream;
    private $rawArray;
    private $error;
    private $numColumns;
    private $columnNames = array();
    
    public function __construct($stream, $columnNames) {
        $this->setRawStream($stream);
        $this->setColumnNames($columnNames);
        $this->setNumColumns(count($columnNames));
    }
    
    public function getValues() {
        $values = array();
        if ( $this->isCsv() ) {
            foreach ( $this->getRawArray() as $numLine => $rawLine ) {
                $csvLine = explode(',', $rawLine);
                foreach ( $csvLine as $key => $value ) {
                    $values[$numLine][$this->columnNames[$key]] = $value;
                }
            }
        } else {
            return count($this->rawArray) > 0 ? $this->rawArray[0] : $this->rawStream;
        }
        return $values;
    }
    
    protected function isCsv() {        
        $rawArray = explode("\n", $this->getRawStream());
        foreach ( $rawArray as $key => $rawLine ) {
            if (strlen($rawLine) == 0 ) {
                unset($rawArray[$key]);
            }
        }
        $this->setRawArray(array_values($rawArray));
        
        return count($this->rawArray) > 0 ? count(explode(',', $this->rawArray[0])) == $this->getNumColumns() : FALSE;
    }
    
    public function getRawStream() {
        return $this->rawStream;
    }

    public function setRawStream($rawStream) {
        $this->rawStream = $rawStream;
    }
    
    public function getRawArray() {
        return $this->rawArray;
    }

    public function getColumnNames() {
        return $this->columnNames;
    }

    public function setRawArray($rawArray) {
        $this->rawArray = $rawArray;
    }

    public function setColumnNames($columnNames) {
        $this->columnNames = $columnNames;
    }
    
    public function getError() {
        return $this->error;
    }

    public function getNumColumns() {
        return $this->numColumns;
    }

    public function setError($error) {
        $this->error = $error;
    }

    public function setNumColumns($numColumns) {
        $this->numColumns = $numColumns;
    }
    
}
