<?php 
class PesoConverter extends UnitConverter {


  public function __construc($value, $fromUnit, $toUnit, $tipoUnidades) {
    parent::__construct($value, $fromUnit, $toUnit, $tipoUnidades);
  }

  public function convert() {
    switch ($this->fromUnit) {
        case "Libras":
            if ($this->toUnit == 'Kilogramos') {
                $this->result = $this->value * 0.453592;
                $this->result = intval($this->value) * 0.453592;
            }else{if ($this->toUnit == 'Gramos') {
                $this->result = $this->value * 453.592;
            }else{
                $this->result = $this->value;
            }}
            
        case "Kilogramos":
            if ($this->toUnit == 'Libras') {
                $this->result = $this->value * 2.20462;
            }else{if ($this->toUnit == 'Gramos') {
                $this->result = $this->value * 1000;
            }else{
                $this->result = $this->value;
            }}

        case "Gramos":
            if ($this->toUnit == 'Libras') {
                $this->result = $this->value * 0.00220462;
            }else{if ($this->toUnit == 'Kilogramos') {
                $this->result = $this->value * 0.001;
            }else{
                $this->result = $this->value;
            }}

    return $this->result;
  }

}
?>
