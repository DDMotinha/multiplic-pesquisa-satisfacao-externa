<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Pesquisa de satisfação</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="iceBlue">
            <img src="aSAsa.png" alt="aSAsa" id="iceBlue">
        </div>
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Pesquisa de Satisfação</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="result.inc.php">
                        <div class="form-row m-b-55">
                            <div class="name">Nome completo</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nome" Required>
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Telefone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="tell" Required>
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Em relação ao atendimento telefônico, o quão satisfeito estaria?</label>
                            <div class="p-t-15">
                                <label class="radio-container">Extremamente satisfeito!
                                    <input type="radio" name="resp_a" value="5" Required>
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="radio-container">Satisfeito!
                                    <input type="radio" name="resp_a" value="4" Required>
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="radio-container">Neutro
                                    <input type="radio" name="resp_a" value="3" Required>
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="radio-container">Pouco satisfeito!
                                    <input type="radio" name="resp_a" value="2" Required>
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="radio-container">Nada satisfeito!
                                    <input type="radio" name="resp_a" value="1" Required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Na sua opinião, qual é a qualidade do serviço prestado pelo suporte técnico da nossa empresa?</label>
                            <div class="p-t-15">
                                <label class="radio-container">Extremamente satisfeito!
                                    <input type="radio" name="resp_b" value="5" Required>
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="radio-container">Satisfeito!
                                    <input type="radio" name="resp_b" value="4" Required>
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="radio-container">Neutro
                                    <input type="radio" name="resp_b" value="3" Required>
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="radio-container">Pouco satisfeito!
                                    <input type="radio" name="resp_b" value="2" Required>
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="radio-container">Nada satisfeito!
                                    <input type="radio" name="resp_b" value="1" Required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Baseado na sua experiência, a nossa empresa atingiu suas expectativas?</label>
                            <div class="p-t-15">
                                <label class="radio-container">Sim
                                    <input type="radio" name="resp_c" value="1" Required>
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="radio-container">Não
                                    <input type="radio" name="resp_c" value="0" Required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>   
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Você recomendaria a nossa empresa para um amigo ou familiar?</label>
                            <div class="p-t-15">
                                <label class="radio-container">Sim
                                    <input type="radio" name="resp_d" value="1" Required>
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="radio-container">Não
                                    <input type="radio" name="resp_d" value="0" Required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>   
                        </div> 
                        <div class="form-row m-b-55">
                            <div class="name">Algum comentário adicional?</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <textarea class="input--style-5" type="text" name="resp_e" style="width: 100%; height: 100px; resize: none;"></textarea>
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input class="btn btn--radius-2 btn--red" type="submit" name="submit">
                        </div>
                    </form>
                        <br><br><br>
                        <!-- Footer -->
                        <footer class="page-footer font-small blue pt-4">
                            <div class="container-fluid text-center text-md-left">
                                <div class="col-md-6 mt-md-0 mt-3">
                                    <div id="center">
                                        <h5 class="text-uppercase">Multiplic Telecom| <img src="anatel-logo-4.png" title="" width="55px; padding: 10px;"> Licenciado: Ato 986/2014 - SP|© 2020 Copyright: <a href="https://multiplicnet.com.br/">Multiplic Telecom</a></h5>
                                    </div>                                
                                </div>
                            </div>
                        </footer>                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->