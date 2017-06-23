<!DOCTYPE html>
<html>
<head>
    <title>Smart Wizard - a JavaScript jQuery Step Wizard plugin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Include SmartWizard CSS -->
    <link href="SmartWizard-master/dist/css/smart_wizard.css" rel="stylesheet" type="text/css" />
    
    <!-- Optional SmartWizard theme -->
    <link href="SmartWizard-master/dist/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
        <br />
        <form action="gravar.php" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                    
        <!-- SmartWizard html -->
        <div id="smartwizard">
            <ul>
                <li><a href="#step-1">01<br /><small>Dados para Contato</small></a></li>
                <li><a href="#step-2">02<br /><small>Tipo de Solicitação</small></a></li>
                <li><a href="#step-3" data-content-url="./datas.php">03<br /><small>Escolha a Data</small></a></li>
                <li><a href="#step-4" data-content-url="./horarios.php">04<br /><small>Horários</small></a></li>
                <li><a href="#step-5">05<br /><small>Confirmação</small></a></li>
            </ul>
            
            <div>
                
                
                
                <div id="step-1">
                    <h2>Dados para Contato</h2>
                    <div id="form-step-0" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="nome">Nome ou Razão Social: *</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome ou Razão Social" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="telefone">Telefone: *</label>
                            <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(11) 0000-0000 ou (11) 90000-0000" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Endereço de E-mail">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                </div>
                
                
                
                
                <div id="step-2">
                    <h2>Tipo de Solicitação</h2>
                    <div id="form-step-1" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="tipoSolicitacao">Talonário Solicitado: *</label>
                            <select class="form-control" name="tipoSolicitacao" id="tipoSolicitacao" required>
                                <option value="">Selecione:</option>
                                <option value="1">Receituário tipo A</option>
                                <option value="2">Talidomida</option>
                                <option value="3">Outros</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" class="form-control" name="quantidade" id="email" placeholder="Nº de talões">
                            <div class="help-block with-errors"></div>
                        </div>
                        
                    </div>
                </div>
                
                
                
                <div id="step-3">
                    <h2>Escolha a data:</h2>
                    <div id="form-step-2" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Write your address..." r equired></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                
                
                
                
                <div id="step-4" class="">
                    <h2>Escolha um dos horários disponíveis:</h2>
                    <p>
                        Terms and conditions: Keep your smile :) 
                    </p>
                    <div id="form-step-3" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="terms">I agree with the T&C</label>
                            <input type="checkbox" id="terms" data-error="Please accept the Terms and Conditions" required>  
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                </div>
                
                
                <div id="step-5" class="">
                    <h2>Confirmação dos dados:</h2>
                    
                    <span id="spamNome"></span><br>
                    <span id="spamTelefone"></span><br>
                    <span id="spamEmail"></span><br>
                    <span id="spamSolicitacao"></span><br>
                    <span id="spamQuantidade"></span><br>
                    <span id="spamDataHora"></span><br><br>
                    
                    
                    
                    <div id="form-step-5" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="terms">Sim, os dados estão corretos.</label>
                            <input type="checkbox" id="terms" data-error="Por favor, confirme os dados!" required>  
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                    
                </div>
                
                
                
                
                
            </div>
        </div>
        
        </form>
        
    </div>
    
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include jQuery Validator plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    

    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="SmartWizard-master/dist/js/jquery.smartWizard.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){


            
            $("#spamNome").html("Nome/R. Social: WELLSampaio");
            $("#spamTelefone").html("Telefone: (11) 9.3397.8340");
            $("#spamEmail").html("E-mail: wsampaio@yahoo.com");
            $("#spamSolicitacao").html("Talonário Solicitado: tipo Z");
            $("#spamQuantidade").html("Quantidade: 99");
            $("#spamDataHora").html("Data/Hora de Chegada: 1900-01-01T00:00");



            // Toolbar extra buttons
            
            var btnFinish = $('<button></button>').text('Confirmar')
                                             .addClass('btn btn-info')
                                             //.css("display", "none")
                                             .on('click', function(){ 
                                                    if( !$(this).hasClass('disabled')){ 
                                                        var elmForm = $("#myForm");
                                                        if(elmForm){
                                                            elmForm.validator('validate'); 
                                                            var elmErr = elmForm.find('.has-error');
                                                            if(elmErr && elmErr.length > 0){
                                                                alert('Oops we still have error in the form');
                                                                return false;    
                                                            }else{
                                                                alert('Great! we are ready to submit form');
                                                                elmForm.submit();
                                                                return false;
                                                            }
                                                        }
                                                    }
                                                });
            
                                                
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){ 
                                                    $('#smartwizard').smartWizard("reset"); 
                                                    $('#myForm').find("input, textarea").val(""); 
                                                });                         
            
            var btnSair = $('<a></a>').text('Sair')
                                             .addClass('btn btn-danger')
                                             .attr( "href", "/PhpProject1" );
            
            
            // Smart Wizard
            $('#smartwizard').smartWizard({ 
                    selected: 0, 
                    theme: 'dots',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish, btnSair]
                                    },
                    anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                            }
                 });
            
            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                var elmForm = $("#form-step-" + stepNumber);
                // stepDirection === 'forward' :- this condition allows to do the form validation 
                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                if(stepDirection === 'forward' && elmForm){
                    elmForm.validator('validate'); 
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        // Form validation failed
                        return false;    
                    }
                }
                return true;
            });
            
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                // Enable finish button only on last step
                if(stepNumber == 3){ 
                    $('.btn-finish').removeClass('disabled');  
                }else{
                    $('.btn-finish').addClass('disabled');
                }
            });                               
            
        });   
    </script>  
</body>
</html>
