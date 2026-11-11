<?php

class LocacaoBicicleta {

    private string $nomeCliente;
    private string $tipoBicicleta;
    private int $horas;

    public function __construct($nomeCliente, $tipoBicicleta, $horas) {
        $this->nomeCliente = $nomeCliente;
        $this->tipoBicicleta = $tipoBicicleta;
        $this->horas = $horas;
    }

    public function getNomeCliente() {
        return $this->nomeCliente;
    }

    public function getTipoBicicleta() {
        return $this->tipoBicicleta;
    }

    public function getHoras() {
        return $this->horas;
    }
    public function calcularValorBruto() {

        if ($this->tipoBicicleta == "Comum") {
            $valorHora = 10;
        } else {
            $valorHora = 18;
        }

        return $valorHora * $this->horas;
    }
    public function calcularDesconto() {

        if ($this->horas >= 5) {
            return $this->calcularValorBruto() * 0.10;
        } else {
            return 0;
        }
    }

    public function calcularTotal() {
        return $this->calcularValorBruto() - $this->calcularDesconto();
    }
}

?>



