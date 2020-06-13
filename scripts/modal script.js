// Function to open the modal when clicking an image
// Saves the scroll value of the page and makes it so you can't scroll
// Calls a function to set the image container height
const openModal = () => {
	document.getElementById('modal-id').style.display = "block";
	const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
	const body = document.body;
	body.style.position = 'fixed';
	body.style.top = `-${scrollY}`;
	calcHeight();
};

// Function to close the modal when clicking the close button
// Scrolls the page back to the original scroll value when the modal opened
// Sets image opacity to 0 so it doesn't transition when reopening the modal
const closeModal = () => {
	const body = document.body;
  const scrollY = body.style.top;
  body.style.position = '';
  body.style.top = '';
  window.scrollTo(0, parseInt(scrollY || '0') * -1);
	document.getElementById('modal-id').style.display = "none";
	for (i = 0; i < images.length; i++) {
		images[i].style.opacity = "0";
	}
};

// Get the html elements by their class name
var images = document.getElementsByClassName("modal-img");
var captionText = document.getElementsByClassName("caption");
var imageContainer = document.getElementsByClassName("modal-container");

// Set a variable for the image index
var modalIndex;

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

	// Loop back to the first or last image when at either end of the modal
	if (n > images.length) {modalIndex = 1;}
	if (n < 1) {modalIndex = images.length;}

	// Set the opacity for each image to 0
	for (i = 0; i < images.length; i++) {
		images[i].style.opacity = "0";
	}

	// Check that there are captions, and hide them
	if(captionText.length > 0) {
		for (i = 0; i < captionText.length; i++) {
			captionText[i].style.display = "none";
		}
	}
	
	// Calculate the image's resized height and set the image container's height to it
	imageContainer[modalIndex-1].style.height = parseInt(window.getComputedStyle(images[modalIndex-1]).height) + "px";
	// Set the current image's opacity to 1
	images[modalIndex-1].style.opacity = 1;
	// Check that there are captions, and display the current image's caption
	if(captionText.length > 0) {captionText[modalIndex-1].style.display = "block";}
}

// Function to set the image container height based on the image's size after responsive resizing
function calcHeight() {
	var i;
	for (i = 0; i < images.length; i++) {
		imageContainer[i].style.height = parseInt(window.getComputedStyle(images[i]).height) + "px";
	}
}

// Keeps track of the page's scroll value
window.addEventListener('scroll', () => {
	document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
});

// Close the modal when the escape key is pressed
document.addEventListener('keyup', function(e) {
    if (e.keyCode == 27) { closeModal(); }
});