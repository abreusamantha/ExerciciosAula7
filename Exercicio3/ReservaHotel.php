<?php
class ReservaHotel {
    private string $nomeHospede;
    private string $tipoQuarto;
    private int $quantidadeDiarias;
    private bool $incluiCafe;

    private const VALOR_STANDARD = 150.00;
    private const VALOR_SUITE = 230.00;
    private const VALOR_CAFE = 25.00;
    private const MINIMO_DIARIAS_DESCONTO = 5;
    private const PERCENTUAL_DESCONTO = 0.08;

    public function __construct(string $nomeHospede, string $tipoQuarto, int $quantidadeDiarias, bool $incluiCafe) {
        $this->nomeHospede = $nomeHospede;
        $this->tipoQuarto = $tipoQuarto;
        $this->quantidadeDiarias = $quantidadeDiarias;
        $this->incluiCafe = $incluiCafe;
    }

    public function getNomeHospede(): string {
        return $this->nomeHospede;
    }

    public function getQuantidadeDiarias(): int {
        return $this->quantidadeDiarias;
    }

    public function getTipoQuarto(): string {
        return $this->tipoQuarto;
    }

    public function calcularHospedagem(): float {
        $valorDiaria = ($this->tipoQuarto === 'Suite') ? self::VALOR_SUITE : self::VALOR_STANDARD;
        return $valorDiaria * $this->quantidadeDiarias;
    }

    public function calcularCafe(): float {
        if (!$this->incluiCafe) {
            return 0.00;
        }
        return self::VALOR_CAFE * $this->quantidadeDiarias;
    }

    public function calcularDesconto(): float {
        if ($this->quantidadeDiarias >= self::MINIMO_DIARIAS_DESCONTO) {
            return $this->calcularHospedagem() * self::PERCENTUAL_DESCONTO;
        }
        return 0.00;
    }

    public function calcularTotal(): float {
        return $this->calcularHospedagem() + $this->calcularCafe() - $this->calcularDesconto();
    }
}
