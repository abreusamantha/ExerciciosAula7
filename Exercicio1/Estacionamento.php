<?php

class Estacionamento {
    private string $placa;
    private string $tipoVeiculo;
    private int $horas;

    public function __construct(string $placa, string $tipoVeiculo, int $horas) {
        $this->placa = $placa;
        $this->tipoVeiculo = $tipoVeiculo;
        $this->horas = $horas;
    }

    public function getPlaca(): string {
        return $this->placa;
    }

    public function getTipoVeiculo(): string {
        return $this->tipoVeiculo;
    }

    public function getHoras(): int {
        return $this->horas;
    }

    public function calcularValor(){
        $hora = (int)$this->hora;
        $valor = 0;

        if($this->TipoVeiculo == "carro"){
            $valor = $hora * 5;
        } elseif($this->TipoVeiculo == "moto"){
            $valor = $hora * 3;
        } elseif($this->TipoVeiculo == "caminhao"){
            $valor = $hora * 10;
        }
        return $valor;
    }

}

