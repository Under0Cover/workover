<?php

    $hierarquia = array(
        array(
            'nome_cargo' => 'CEO',
            'subordinados' => array (
                //Início: Diretor Comercial
                array(
                    'nome_cargo' => 'Diretor Comercial',
                    'subordinados' => array (
                        //Início: Gerente de Vendas
                        array (
                            'nome_cargo' => 'Gerente de Vendas'
                        )
                    )
                    //Termino: Gerente de Vendas
                ),
                //Termino: Diretor Comercial
                //Início: Diretor Financeiro
                array(
                    'nome_cargo' => 'Diretor Financeiro',
                    'subordinados' => array (
                        //Início: Gerente de contas a pagar
                        array (
                            'nome_cargo' => 'Gerente de contas a pagar',
                            'subordinados' => array(
                                //Início: Supervisor de pagamentos
                                array(
                                    'nome_cargo' => 'Supervisor de pagamentos'
                                )
                                //Termino: Supervisor de pagementos
                            )
                        ),
                        //Termino: Gerente de contas a pagar
                        //Início: Gerente de compras
                        array (
                            'nome_cargo' => 'Gerente de compras',
                            'subordinados' => array (
                                //Início: Supervisor de suprimentos
                                array (
                                    'nome_cargo' => 'Supervisor de suprimentos',
                                    'subordinados' => array (
                                        array (
                                            'nome_cargo' => 'Funcionário'
                                        )
                                    )
                                )
                                //Termino: Supervisor de suprimentos
                            )
                        )
                        //Termino: Gerente de compras
                    )
                )
                //Termino: Diretor Financeiro
            ) 
        )
    );


    function exibe ($cargos) {
        $html = '<ul>';
        foreach ($cargos as $cargo) {
            $html .= '<li>';    
            $html .= $cargo['nome_cargo'];
            $html .= '</li>';
            if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
                $html .= exibe($cargo['subordinados']);
            }
        }
        $html .= '</ul>';

        return $html;
    }

    echo exibe($hierarquia);

?>