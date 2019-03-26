var i = 0; // Start point
	var images = [];
	var time = 3000;

	// Image List
	images[0] = 'image/imag1.jpg';
	images[1] = 'image/imag2.png';
	images[2] = 'image/imag3.jpg';
	images[3] = 'image/imag4.jpg';
	images[4] = 'image/imag5.jpg';

	// Change Image
	function changeImg(){
		document.slide.src = images[i];

		if(i < images.length - 1){
			i++;
		} else {
			i = 0;
		}

		setTimeout("changeImg()", time);
	}

	window.onload = changeImg;