<script>
function navshow(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
function secnavshow(id){
	var x = document.getElementById(id);
	if (x.className.indexOf("w3-show") == -1){
		x.className += " w3-show";
	}else {
		x.className = x.className.replace("w3-show","");
	}
}
</script>
<script src="{{asset ('platformPublic/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset ('platformPublic/js/jquery.sticky-kit.min.js')}}"></script>
<script src="{{asset ('platformPublic/js/custom.js')}}"></script>
<script src="{{asset ('platformPublic/js/bootstrap.min.js')}}"></script>
<script src="{{asset ('platformPublic/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset ('platformPublic/js/grid-blog.min.js')}}"></script>
<script src="{{asset ('js/w3.js')}}"></script>