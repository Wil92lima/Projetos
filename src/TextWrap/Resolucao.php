<?php

namespace Galoa\ExerciciosPhp\TextWrap;

/**
 * Implemente sua resolução aqui.
 */
class Resolucao implements TextWrapInterface {
//
  /**
   * {@inheritdoc}
   */

  //
  public function textWrap(string $text, int $length): array {

    $tamanho = strlen($text);
    $array=array();
  	$linhaNum = 0;


    if($tamanho<$length ){
      $array[$linhaNum] = $text;
    }

    else{

       while(true){


          $tamanho = strlen($text);

        
          if($tamanho<=$length){

            $array[$linhaNum] = $restanteLinha;
            break;

          }
          else{

            //PEGA O VALOR DE TAMANHO QUE VAI DEFINIR A LINHA E O RESTANTE DA FRASE 

            for(;$tamanho>=0;$tamanho--){
                if($tamanho<=$length && $text[$tamanho] == " "){
                  break;
                }
              }

              $linha = "";

              //PEGA A LINHA E GUARDA NA VARIAVEL LINHA

              for($i=0;$i<=$tamanho-1;$i++){
                $linha .= $text[$i];
              }
             
             //PEGA O RESTANTE DA LINHA E GUARDA NA VARIAVEL TEXT
              $restanteLinha = "";

              for($i=$tamanho+1;$i<strlen($text);$i++){
                $restanteLinha .= $text[$i];
              }
                //ADICIONA A LINHA AO ARRAY
                $array[$linhaNum] = $linha;
                //ATRIBUI O RESTANTE DA LINHA A VARIAVEL TEXT
                $text = $restanteLinha;
                $linhaNum++;
           }  
        }
    }

    return $array;
  }
}
