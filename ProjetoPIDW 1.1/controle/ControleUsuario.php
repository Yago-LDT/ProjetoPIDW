<?php

session_start();

require_once '../modelo/ClassUsuario.php';
require_once '../modelo/DAO/ClassUsuarioDAO.php';

$id =@$_POST['idex'];
$excluirid =@$_POST['excluirid'];
$novoid =@$_POST['novoid'];
$usuario =@$_POST['usuario'];
$novousuario =@$_POST['novousuario'];
$senha =@$_POST['senha'];
$novasenha =@$_POST['novasenha'];
//
$nome =@$_POST['nome'];
$cargo =@$_POST['cargo'];
$salario =@$_POST['salario'];
$CPF =@$_POST['cpf'];
$data_admissao =@$_POST['data_admissao'];
$telefone =@$_POST['telefone'];
$email =@$_POST['email'];
//
$produto =@$_POST['produto'];
$CNPJ =@$_POST['CNPJ'];
$ultima_remessa =@$_POST['ultimaremessa'];
$proxima_remessa =@$_POST['proximaremessa'];
//
$titulo =@$_POST['titulo'];
$carga_horaria =@$_POST['cargahoraria'];
$funcao =@$_POST['funcao'];
$faixa_salarial =@$_POST['faixasalarial'];
//
$funcionario_id =@$_POST['funcionarioid'];
$horas_em_banco =@$_POST['horasbanco'];
$ferias =@$_POST['ferias'];
$licencas =@$_POST['licencas'];
//
$produtividade =@$_POST['produtividade'];
$empenho =@$_POST['empenho'];
$relatorio =@$_POST['relatorio'];
$recomenda_promocao =@$_POST['recomendapromocao'];
//
$duracao =@$_POST['duracao'];
$fornecedor_id =@$_POST['fornecedorid'];
$produto_quantidade =@$_POST['produtoquantidade'];
$custos =@$_POST['custos'];
//
$cargo_id =@$_POST['cargoid'];
$salario_bruto =@$_POST['salariobruto'];
$beneficios =@$_POST['beneficios'];
$bonus =@$_POST['bonus'];
$valor_receber =@$_POST['valorreceber'];
//
$horario_chegada =@$_POST['horariochegada'];
$horario_saida =@$_POST['horariosaida'];
$horas =@$_POST['horas'];
//
$acao = $_GET['ACAO'] ?? '';

$processar = new ClassUsuario();

$processar->setId($id);
$processar->setExcluirid($excluirid);
$processar->setNovoid($novoid);
$processar->setUsuario($usuario);
$processar->setNovousuario($novousuario);
$processar->setSenha($senha);
$processar->setNovasenha($novasenha);
//
$processar->setNome($nome);
$processar->setCargo($cargo);
$processar->setSalario($salario);
$processar->setCPF($CPF);
$processar->setDataAdmissao($data_admissao);
$processar->setTelefone($telefone);
$processar->setEmail($email);
//
$processar->setProduto($produto);
$processar->setCNPJ($CNPJ);
$processar->setUltimaRemessa($ultima_remessa);
$processar->setProximaRemessa($proxima_remessa);
//
$processar->setTitulo($titulo);
$processar->setCargaHoraria($carga_horaria);
$processar->setFuncao($funcao);
$processar->setFaixaSalarial($faixa_salarial);
//
$processar->setFuncionarioId($funcionario_id);
$processar->setHorasEmBanco($horas_em_banco);
$processar->setFerias($ferias);
$processar->setLicencas($licencas);
//
$processar->setProdutividade($produtividade);
$processar->setEmpenho($empenho);
$processar->setRelatorio($relatorio);
$processar->setRecomendaPromocao($recomenda_promocao);
//
$processar->setDuracao($duracao);
$processar->setFornecedorId($fornecedor_id);
$processar->setProdutoQuantidade($produto_quantidade);
$processar->setCustos($custos);
//
$processar->setCargoId($cargo_id);
$processar->setSalarioBruto($salario_bruto);
$processar->setBeneficios($beneficios);
$processar->setBonus($bonus);
$processar->setValorReceber($valor_receber);
//
$processar->setHorarioChegada($horario_chegada);
$processar->setHorarioSaida($horario_saida);
$processar->setHoras($horas);


$ClassUsuarioDAO = new ClassUsuarioDAO();

switch($acao) {
//
    case "autenticarlogin":
        $resultado = $ClassUsuarioDAO->login($processar);

        if($resultado){
        $_SESSION['mensagem'] = "Login realizado com sucesso!";
        header('Location: ../menu.html');
        exit();
    
        } else{
        $_SESSION['mensagem'] = "Não foi possível realizar o login, usuário ou senha inválidos!";
            header('Location: ../index.php'); 
            exit();
        }

            break;
//
    case "cadastrarlogin":
        $passwordhash = password_hash($senha, PASSWORD_BCRYPT);
        $processar->setPasswordHash($passwordhash);
        $resultado = $ClassUsuarioDAO->cadastrarlogin($processar);

        if($resultado >= 1) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: ../visao/formularios/login/cadastrarlogin.php');
            exit();
        } else{
            $_SESSION['mensagem'] = "Erro ao realizar o cadastro!";
            header('Location: ../visao/formularios/login/cadastrarlogin.php');

        }

            break;
//
    case "alterarlogin":
        $passwordhash = password_hash($novasenha, PASSWORD_BCRYPT);
        $processar->setPasswordHash($passwordhash);
        $resultado = $ClassUsuarioDAO->alterarlogin($processar);

        if($resultado >= 1) {
            $_SESSION['mensagem'] = "Login alterado com sucesso!";
            header('Location: ../visao/formularios/login/alterarlogin.php');
            exit();

        } else{
            $_SESSION['mensagem'] = "Erro ao alterar o login!";
            header('Location: ../visao/formularios/login/alterarlogin.php');
            exit();

        }

            break;
//
    case "excluirlogin":
        $resultado = $ClassUsuarioDAO->excluirlogin($processar);

        if($resultado >= 1) {
            $_SESSION['mensagem'] = "Login excluído com sucesso!";
            header('Location: ../visao/formularios/login/excluirlogin.php');
            exit();

        } else{
            $_SESSION['mensagem'] = "Erro ao excluir o login!";
            header('Location: ../visao/formularios/login/excluirlogin.php');

        }

            break;
//
    case "cadastrarfuncionario":
        $resultado = $ClassUsuarioDAO->cadastrarfuncionario($processar);

        if($resultado >= 1) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: ../visao/formularios/funcionarios/cadastrarfuncionario.php');
            exit();
        } else{
            $_SESSION['mensagem'] = "Erro ao realizar o cadastro!";
            header('Location: ../visao/formularios/funcionarios/cadastrarfuncionario.php');

        }

            break;
// 
    case "excluirfuncionario":
                $resultado = $ClassUsuarioDAO->excluirfuncionario($processar);
        
                if($resultado >= 1) {
                    $_SESSION['mensagem'] = "Funcionário excluido com sucesso!";
                    header('Location: ../visao/formularios/funcionarios/excluirfuncionario.php');
                    exit();
                } else{
                    $_SESSION['mensagem'] = "Erro ao excluir funcionário!";
                    header('Location: ../visao/formularios/funcionarios/excluirfuncionario.php');
        
                }
        
                    break;
//    
    case "alterarfuncionario":
        $resultado = $ClassUsuarioDAO->alterarfuncionario($processar);
                
                        if($resultado >= 1) {
                            $_SESSION['mensagem'] = "Funcionario alterado com sucesso!";
                            header('Location: ../visao/formularios/funcionarios/alterarfuncionario.php');
                            exit();
                
                        } else{
                            $_SESSION['mensagem'] = "Erro ao alterar o funcionario!";
                            header('Location: ../visao/formularios/funcionarios/alterarfuncionario.php');
                            exit();
                
                        }
                
                            break;
//
    case "cadastrarfornecedor":
        $resultado = $ClassUsuarioDAO->cadastrarfornecedor($processar);
                        
                if($resultado >= 1) {
                $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
                header('Location: ../visao/formularios/fornecedores/cadastrarfornecedor.php');
                exit();
                    } else{
                        $_SESSION['mensagem'] = "Erro ao realizar o cadastro!";
                        header('Location: ../visao/formularios/fornecedores/cadastrarfornecedor.php');
                        
                                }
                        
                                    break;
//   
    case "excluirfornecedor":
        $resultado = $ClassUsuarioDAO->excluirfornecedor($processar);
                                                        
            if($resultado >= 1) {
                $_SESSION['mensagem'] = "Fornecedor excluido com sucesso!";
                header('Location: ../visao/formularios/fornecedores/excluirfornecedor.php');
                exit();
                } else{
                $_SESSION['mensagem'] = "Erro ao excluir o fornecedor!";
                header('Location: ../visao/formularios/fornecedores/excluirfornecedor.php');
                                                        
                }
                                                        
                break;
//
    case "alterarfornecedor":
        $resultado = $ClassUsuarioDAO->alterarfornecedor($processar);
            
                    if($resultado >= 1) {
                        $_SESSION['mensagem'] = "Fornecedor alterado com sucesso!";
                        header('Location: ../visao/formularios/fornecedores/alterarfornecedor.php');
                        exit();
            
                    } else{
                        $_SESSION['mensagem'] = "Erro ao alterar o fornecedor!";
                        header('Location: ../visao/formularios/fornecedores/alterarfornecedor.php');
                        exit();
            
                    }
            
                        break;
//
    case "cadastrarcargo":
        $resultado = $ClassUsuarioDAO->cadastrarcargo($processar);
                    
            if($resultado >= 1) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: ../visao/formularios/cargos/cadastrarcargo.php');
            exit();
                } else{
                    $_SESSION['mensagem'] = "Erro ao realizar o cadastro!";
                    header('Location: ../visao/formularios/cargos/cadastrarcargo.php');
                    
                            }
                    
                                break;                 
//
    case "excluircargo":
        $resultado = $ClassUsuarioDAO->excluircargo($processar);

        if($resultado >= 1) {
        $_SESSION['mensagem'] = "Cargo excluido com sucesso!";
        header('Location: ../visao/formularios/cargos/excluircargo.php');
        exit();
         } else{
        $_SESSION['mensagem'] = "Erro ao excluir cargo!";
        header('Location: ../visao/formularios/cargos/excluircargo.php');

        }

        break;
//
    case "alterarcargo":
        $resultado = $ClassUsuarioDAO->alterarcargo($processar);
        
                if($resultado >= 1) {
                    $_SESSION['mensagem'] = "Cargo alterado com sucesso!";
                    header('Location: ../visao/formularios/cargos/alterarcargo.php');
                    exit();
        
                } else{
                    $_SESSION['mensagem'] = "Erro ao alterar o cargo!";
                    header('Location: ../visao/formularios/cargos/alterarcargo.php');
                    exit();
        
                }
        
                    break;
//
    case "cadastrarbancodehoras":
         $resultado = $ClassUsuarioDAO->cadastrarbancodehoras($processar);
                    
            if($resultado >= 1) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: ../visao/formularios/bancodehoras/cadastrarbancohoras.php');
            exit();
                } else{
                    $_SESSION['mensagem'] = "Erro ao realizar o cadastro!";
                    header('Location: ../visao/formularios/bancodehoras/cadastrarbancohoras.php');
                    
                            }
                    
                                break;
//
    case "excluirbancodehoras":
        $resultado = $ClassUsuarioDAO->excluirbancodehoras($processar);

            if($resultado >= 1) {
        $_SESSION['mensagem'] = "Excluido com sucesso!";
        header('Location: ../visao/formularios/bancodehoras/excluirbancohoras.php');
        exit();
        } else{
        $_SESSION['mensagem'] = "Erro ao excluir!";
        header('Location: ../visao/formularios/bancodehoras/excluirbancohoras.php');

     }

        break;
//
    case "alterarbancodehoras":
         $resultado = $ClassUsuarioDAO->alterarbancodehoras($processar);
        
                if($resultado >= 1) {
                    $_SESSION['mensagem'] = "Banco de horas alterado com sucesso!";
                    header('Location: ../visao/formularios/bancodehoras/alterarbancohoras.php');
                    exit();
        
                } else{
                    $_SESSION['mensagem'] = "Erro ao alterar o banco de horas!";
                    header('Location: ../visao/formularios/bancodehoras/alterarbancohoras.php');
                    exit();
        
                }
        
                    break;

//
    case "cadastraravaliacao":
        $resultado = $ClassUsuarioDAO->cadastraravaliacao($processar);
                    
            if($resultado >= 1) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: ../visao/formularios/avaliacao/cadastraravaliacao.php');
            exit();
                } else{
                    $_SESSION['mensagem'] = "Erro ao realizar o cadastro!";
                    header('Location: ../visao/formularios/avaliacao/cadastraravaliacao.php');
                    
                            }
                    
                                break;

//
    case "excluiravaliacao":
     $resultado = $ClassUsuarioDAO->excluiravaliacao($processar);

            if($resultado >= 1) {
        $_SESSION['mensagem'] = "Excluido com sucesso!";
        header('Location: ../visao/formularios/avaliacao/excluiravaliacao.php');
        exit();
         } else{
        $_SESSION['mensagem'] = "Erro ao excluir!";
        header('Location: ../visao/formularios/avaliacao/excluiravaliacao.php');

     }

        break;
//
    case "alteraravaliacao":
        $resultado = $ClassUsuarioDAO->alteraravaliacao($processar);
        
                if($resultado >= 1) {
                    $_SESSION['mensagem'] = "Avaliação alterada com sucesso!";
                    header('Location: ../visao/formularios/avaliacao/alteraravaliacao.php');
                    exit();
        
                } else{
                    $_SESSION['mensagem'] = "Erro ao alterar a avaliação!";
                    header('Location: ../visao/formularios/avaliacao/alteraravalicao.php');
                    exit();
        
                }
        
                    break;
//
    case "cadastrarcontrato":
     $resultado = $ClassUsuarioDAO->cadastrarcontrato($processar);
                    
            if($resultado >= 1) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: ../visao/formularios/contrato/cadastrarcontrato.php');
            exit();
                } else{
                    $_SESSION['mensagem'] = "Erro ao realizar o cadastro!";
                    header('Location: ../visao/formularios/contrato/cadastrarcontrato.php');
                    
                            }
                    
                                break;
//
    case "excluircontrato":
        $resultado = $ClassUsuarioDAO->excluircontrato($processar);

        if($resultado >= 1) {
        $_SESSION['mensagem'] = "Excluido com sucesso!";
        header('Location: ../visao/formularios/contrato/excluircontrato.php');
        exit();
         } else{
        $_SESSION['mensagem'] = "Erro ao excluir!";
        header('Location: ../visao/formularios/contrato/excluircontrato.php');

        }

        break;
//
    case "alterarcontrato":
         $resultado = $ClassUsuarioDAO->alterarcontrato($processar);
        
                if($resultado >= 1) {
                    $_SESSION['mensagem'] = "Contrato alterado com sucesso!";
                    header('Location: ../visao/formularios/contrato/alterarcontrato.php');
                    exit();
        
                } else{
                    $_SESSION['mensagem'] = "Erro ao alterar a avaliação!";
                    header('Location: ../visao/formularios/contrato/alterarcontrato.php');
                    exit();
        
                }
        
                    break;
//
    case "cadastrarfolhapagamento":
        $resultado = $ClassUsuarioDAO->cadastrarfolhapagamento($processar);
                    
            if($resultado >= 1) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: ../visao/formularios/folhapagamento/cadastrarfolha.php');
            exit();
                } else{
                    $_SESSION['mensagem'] = "Erro ao realizar o cadastro!";
                    header('Location: ../visao/formularios/folhapagamento/cadastrarfolha.php');
                    
                            }
                    
                                break;
//
    case "excluirfolhapagamento":
     $resultado = $ClassUsuarioDAO->excluirfolhapagamento($processar);

        if($resultado >= 1) {
        $_SESSION['mensagem'] = "Excluido com sucesso!";
        header('Location: ../visao/formularios/folhapagamento/excluirfolha.php');
        exit();
         } else{
        $_SESSION['mensagem'] = "Erro ao excluir!";
        header('Location: ../visao/formularios/folhapagamento/excluirfolha.php');

        }

        break;
//
    case "alterarfolhapagamento":
            $resultado = $ClassUsuarioDAO->alterarfolhapagamento($processar);
                
                        if($resultado >= 1) {
                            $_SESSION['mensagem'] = "Folha de pagamento alterada com sucesso!";
                            header('Location: ../visao/formularios/folhapagamento/alterarfolha.php');
                            exit();
                
                        } else{
                            $_SESSION['mensagem'] = "Erro ao alterar a folha!";
                            header('Location: ../visao/formularios/folhapagamento/alterarfolha.php');
                            exit();
                
                        }
                
                            break;
//
    case "cadastrarfolhaponto":
        $resultado = $ClassUsuarioDAO->cadastrarfolhaponto($processar);
                    
            if($resultado >= 1) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: ../visao/formularios/folhaponto/cadastrarponto.php');
            exit();
                } else{
                    $_SESSION['mensagem'] = "Erro ao realizar o cadastro!";
                    header('Location: ../visao/formularios/folhaponto/cadastrarponto.php');
                    
                            }
                    
                                break;
//
    case "excluirfolhaponto":
        $resultado = $ClassUsuarioDAO->excluirfolhaponto($processar);

         if($resultado >= 1) {
        $_SESSION['mensagem'] = "Excluido com sucesso!";
        header('Location: ../visao/formularios/folhaponto/excluirponto.php');
        exit();
        } else{
        $_SESSION['mensagem'] = "Erro ao excluir!";
        header('Location: ../visao/formularios/folhaponto/excluirponto.php');

        }

        break;
//
    case "alterarfolhaponto":
        $resultado = $ClassUsuarioDAO->alterarfolhaponto($processar);
        
                if($resultado >= 1) {
                    $_SESSION['mensagem'] = "Folhaponto alterada com sucesso!";
                    header('Location: ../visao/formularios/folhaponto/alterarponto.php');
                    exit();
        
                } else{
                    $_SESSION['mensagem'] = "Erro ao alterar a folha!";
                    header('Location: ../visao/formularios/folhaponto/alterarponto.php');
                    exit();
        
                }
        
                    break;
//
    }




?>