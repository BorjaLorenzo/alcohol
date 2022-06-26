jQuery(document).ready(function($) {
	function twInit(){
		// slider();
		$('a').each(function(ind,val){
			hovering(this);	
		})
		onScrollInit( $('.os-animation') );
		var rellax = new Rellax('.rellax');
		menuPlace();
		modalVideos()
		// modalCompartir();
  //       modalFormulario();
		// modalVideos();
		// sendForm();
	}
	twInit()	
});
