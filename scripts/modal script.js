// Function to open the modal when clicking an image
// Saves the scroll value of the page and makes it so you can't scroll
const openModal = () => {
	document.getElementById('modal-id').style.display = "block";
	const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
	const body = document.body;
	body.style.position = 'fixed';
	body.style.top = `-${scrollY}`;
};

// Function to close the modal when clicking the close button
// Scrolls the page back to the original scroll value when the modal opened
const closeModal = () => {
	const body = document.body;
  const scrollY = body.style.top;
  body.style.position = '';
  body.style.top = '';
  window.scrollTo(0, parseInt(scrollY || '0') * -1);
	document.getElementById('modal-id').style.display = "none";
};

// Set the index for the images and call the show function
var modalIndex = 1;
showModal(modalIndex);

// Take in an integer and increase the image index that many times
// Used to scroll through the images
function plusModal(n) {
	showModal(modalIndex += n);
}

// Take in an integer and set the image index equal to it
// Used to open the modal at a specific image
function currentModal(n) {
	showModal(modalIndex = n);
}

// Take in an integer, set variables for the images and info, set the image
// index, clear the images and info, then set the correct image and info to show
function showModal(n) {
	var i;
	var images = document.getElementsByClassName("modal-img");
	var captionText = document.getElementsByClassName("caption");

	// Loop back to the first or last image when at either end of the modal
	if (n > images.length) {modalIndex = 1;}
	if (n < 1) {modalIndex = images.length;}

	// Set the opacity for each image to 0
	for (i = 0; i < images.length; i++) {
		//images[i].style.display = "none";
		images[i].style.opacity = "0";
	}

	// Check that there are captions, and hide them
	if(captionText.length > 0) {
		for (i = 0; i < captionText.length; i++) {
			captionText[i].style.display = "none";
		}
	}

	// Set the current image's opacity to 1
	//images[modalIndex-1].style.display = "block";
	images[modalIndex-1].style.opacity = 1;
	// Check that there are captions, and display the current image's caption
	if(captionText.length > 0) {captionText[modalIndex-1].style.display = "block";}
}

// Keeps track of the page's scroll value
window.addEventListener('scroll', () => {
	document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
});

// Close the modal when the escape key is pressed
document.addEventListener('keyup', function(e) {
    if (e.keyCode == 27) { closeModal(); }
});