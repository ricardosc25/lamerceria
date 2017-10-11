</main>
<footer class="page-footer  blue-grey lighten-5">
	<div class="footer-copyright">
		<div class="container black-text">
		© 2017 Copyright - Desarrollado por <b>Rsuarez</b>
		</div>
	</div>
</footer>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/materialize.js"></script>
<script src="https://use.fontawesome.com/295276088e.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".button-collapse").sideNav();
		$('.slider').slider();
		$('select').material_select();
		$('.materialboxed').materialbox();
		$('.modal').modal();
				$('.carousel.carousel-slider').carousel({fullWidth: true}); //Utilizado por la galería
				//Función siguiente	
				$('#nextButton').click(function() {
					$('.carousel').carousel('next');
				});
				 //Función Anterior
				 $('#beforeButton').click(function() {
				 	$('.carousel').carousel('prev');
				 });
				 $('.carousel').carousel({
				 	padding: 200    
				 });
				 autoplay()   
				 function autoplay() {
				 	$('.carousel').carousel('next');
				 	setTimeout(autoplay, 5500);
				 }


				 $('.datepicker').pickadate({
				 	monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
				 	monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
				 	weekdaysFull: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
				 	weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
				 	showMonthsShort: undefined,
				 	showWeekdaysFull: undefined,
				    selectMonths: true, // Creates a dropdown to control month
				    selectYears: 15, // Creates a dropdown of 15 years to control year,
				    today: 'Hoy',
				    clear: 'Limpiar',
				    close: 'Ok',
				    closeOnSelect: false, // Close upon selecting a date,

				    min: 1,
				    max: 670,


				});
				});

			</script>
		</body>
		</html>