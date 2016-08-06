<section id="team" class="gray-section team">
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h2>
                                Encuesta
                            </h2>
                            <p>
                                Esta encuesta es totalmente ANONIMA, en ningún momento ingresaras tu nombre, correo o teléfono.La finalidad de este estudio es recopilar información básica del mercado laboral y poder determinar el salario promedio de los guatemaltecos según el perfil de cada uno.
                                <br><br>Al terminar el estudio te compartiremos los resultados así podrás saber si estas ganando por arriba, por debajo o de acuerdo al promedio de personas que tienen el mismo perfil que tu.
                                <br><br>Por favor responde estas preguntas con honestidad. Entre mas certeras sean las respuestas, mejor será la información contra la que te podrás comparar.<br><br>
                            </p>
                            <form id="forma" method="post" action="<?php echo $this->uri->uri_string() ?>"class="wizard-big">
                                <h1>Demográficas</h1>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>¿En qué pais trabajas?</label>
                                                <?php echo form_dropdown('country', $countries, 1, 'id="country"' ); ?> 
                                            </div>
                                            <div class="form-group" id ="town">
                                                <label>¿En qué departamento?</label>
                                                <?php echo form_dropdown('town', $towns, 1); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>¿Qué edad tienes?</label>
                                                <input id="age" name="age" type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>¿Cuál es tu sexo?</label>
                                                <br>
                                                <div class="float-left">
                                                    <input type="radio" name="gender" value="male" id="male">
                                                    <label for="male"><img src="img/icon/male.png" alt="Hombre" /></label>
                                                </div>
                                                <div class="float-left">
                                                    <input type="radio" name="gender" value="female" id="female">
                                                    <label for="female"><img src="img/icon/female.png" alt="Mujer" /></label>
                                                </div>
                                                <div class="float-left">
                                                    <input type="radio" name="gender" value="other" id="other">
                                                    <label for="other"><img src="img/icon/other.png" alt="Otro" /></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Educación</h1>
                                <fieldset>
                                    <div class="row col-lg-8">
                                            <div class="form-group">
                                                <label>¿Último grado academíco?</label>
                                                <?php echo form_dropdown('grade_school', $grade_school, 1, 'id="grade_school"' ); ?> 
                                            </div>
                                            <div class="form-group">
                                                <label>Establecimiento</label>
                                                <select name="school" id="school">
                                                </select>
                                            </div>
                                            <div class="form-group" id="career-block">
                                                <label>Carrera</label>
                                                <select name="career" id="career">
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Año de graduación</label>
                                                <input id="age" name="date" type="date" class="form-control">
                                            </div>
                                     </div>
                                </fieldset>

                                <h1>Profesional</h1>
                                <fieldset>
                                    <div class="row col-lg-8">
                                        <div class="form-group">
                                                <label>¿En qué tipo de industria/sector empresarial está la empresa para la que trabajas?</label>
                                                <?php echo form_dropdown('industry', $industry, 1, 'id="industry"' ); ?> 
                                        </div>
                                        <div class="form-group">
                                                <label>¿En qué area de tu empresa trabajas?</label>
                                                <?php echo form_dropdown('area', $area, 1, 'id="area"' ); ?> 
                                        </div>
                                        <div class="form-group">
                                                <label>¿Cuál es el puesto que actualmente desempeñas?</label>
                                                <input id="job" name="job" type="text" class="form-control"> 
                                        </div>
                                        <div class="form-group">
                                                <label>¿Cuál consideras que es el nivel de tu puesto?</label>
                                                <?php echo form_dropdown('job_level', $job_level, 1, 'id="job_level"' ); ?> 
                                        </div>
                                        <div class="form-group">
                                                <label>¿Cuantos años llevas desempeñando en ese puesto?</label>
                                                <input id="age_job" name="age_job" type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                <label>¿Cuantas personas te reportan?</label>
                                                <input id="cant_helpers" name="cant_helpers" type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                <label>¿Cuál consideras que es el nivel de tú jefé?</label>
                                                <?php echo form_dropdown('job_level_boss', $job_level, 1, 'id="job_level_boss"' ); ?> 
                                        </div>
                                    </div>
                                </fieldset>

                                <h1>Compensación</h1>
                                <fieldset>
                                    <div class="row col-lg-8">
                                        <div class="form-group">
                                                <label>¿Cúal es tu salario base?</label>
                                                <input id="salary" name="salary" type="number" class="form-control">
                                         </div>
                                         <div class="form-group">
                                             <label>Beneficios adicionales</label><br>
                                                <input type="checkbox" name="salary_extra_hours" value="1"> Horas Extras<br>
                                                <input type="checkbox" name="salary_month_bonus" value="1" > Bono Trimestral<br>
                                                <input type="checkbox" name="salary_year_bonus" value="1" > Bono Anual<br>
                                                <input type="checkbox" name="salary_saler_comission" value="1" > Comisiones o porcentaje sobre resultados<br>
                                                <input type="checkbox" name="salary_utilities" value="1" > Repartición de Utilidades<br>
                                                <input type="checkbox" name="salary_tips" value="1" > Propinas<br>
                                                <input type="checkbox" name="salary_others" value="1" > Otro<br>
                                         </div>
                                         <div class="form-group">
                                                <label>Para futuras consultas ingresa tu Email, recuerda que este campo es opcional y no queda enlazado con la información ingresada.</label>
                                                <input id="email" name="email" type="email" class="form-control">
                                         </div>
                                    </div>
                                </fieldset>
                                
                            </form>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
    </div>
</section>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/inspinia.js"></script>
<!-- Steps -->
<script src="js/plugins/staps/jquery.steps.min.js"></script>
<!-- Jquery Validate -->
<script src="js/jqBootstrapValidation.js"></script>

<link href="css/plugins/chosen/chosen.css" rel="stylesheet">
<!-- Chosen -->
<script src="js/plugins/chosen/chosen.jquery.js"></script>

<script>
    
    
  $(document).ready(function(){

   $("body").delegate("select[id=country]", "change", function() {
     var id = $("#country option:selected").val();
         if (id != 1 ) {
             $('#town').hide();
         } else {
             $('#town').show();
         }
    });
    
    $("#career-block").hide();
    
    $("body").delegate("select[id=grade_school]", "change", function() {
     var id = $("#grade_school option:selected").val();
       $.ajax({
            data: { catalog: id, category:  1 },
            method: "GET",
            url: "<?php echo base_url() . 'home/load_select'  ?>",
            success: function(data){
                $('#school').html(data);
                $("#school").chosen("destroy");
                $('#school').chosen({});
            }
        });
        
        if (id == 1 || id == 2 || id == 3) {
            $("#career-block").hide();
        } else {
            $("#career-block").show();
            $.ajax({
                data: { catalog: id, category:  2 },
                method: "GET",
                url: "<?php echo base_url() . 'home/load_select'  ?>",
                success: function(data){
                    $('#career').html(data);
                }
            });    
        }
        
        
        
    });
  
     $("#wizard").steps();
     $("#forma").steps({
        bodyTag: "fieldset",
        labels: {
            cancel: "Cancelar",
            current: "current step:",
            pagination: "Pagination",
            finish: "Finalizar",
            next: "Siguiente",
            previous: "Anterior",
            loading: "Loading ..."
       }, onFinished: function (){
           $('#forma').submit();
       }
      /* onStepChanging: function (event, currentIndex, newIndex){
            
          var $form = $(this);
          var warningsFound = 0;
          
          $inputs.each(function (i, el) {
            var $this = $(el),
              $controlGroup = $this.parents(".control-group").first();
            if (
              $controlGroup.hasClass("warning")
            ) {
              $controlGroup.removeClass("warning").addClass("error");
              warningsFound++;
            }
          });

       } */
    }); 
 });
</script>
