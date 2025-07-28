<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv</title>
	<head>
	  <script src="imageMapResizer.min.js"></script>
    <script>
        // Initialize the image map resizer when the window loads
        window.addEventListener('load', function() {
            imageMapResize();
        });
    </script>	
<script type="text/javascript">
  if (screen.width >= 858) {
    document.location = "home.php";
  }
</script>
	</head>
    <style>
	
	
	body {
			display: block;
			margin: 0;
			padding:0;
		
		    margin: 0;
            font-family: sans-serif;
			height: auto;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
         
            /* Hide scrollbars for body (cross-browser) */
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;     /* Firefox */
        }
        body::-webkit-scrollbar {
            display: none;             /* Chrome, Safari, Opera */
        }
		img {
  display: block;
  width: 100%;

  margin: auto;
  image-rendering: auto;

}

      .scroll-container {
   
          
            overflow-y: auto; /* This is crucial for scrolling, even if scrollbar is hidden */
            background-color: #fff;

            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            scroll-behavior: smooth; /* Makes programmatic scrolls smooth */
            /* Hide scrollbars for this container (cross-browser) */
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .scroll-container::-webkit-scrollbar {
            display: none;
        }

        /* Just for demonstrating scrollable content */
        .content {
            height: 63%; /* Make content taller than the container to enable scrolling */

        }
        p {
            margin-bottom: 1em;
        }


}


*/

@media (orientation: landscape) {
  /* Your CSS rules for landscape mode go here */
     /* Just for demonstrating scrollable content */
        .content {
            height: auto%; /* Make content taller than the container to enable scrolling */

        }
		body {
			display: block;
			margin: 0;
			padding:0;
		
		    margin: 0;
            font-family: sans-serif;
			height: auto;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
         
            /* Hide scrollbars for body (cross-browser) */
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;     /* Firefox */
        }
        body::-webkit-scrollbar {
            display: none;             /* Chrome, Safari, Opera */
        }
		img {
  display: block;
  width: 100%;

  margin: auto;
  image-rendering: auto;

	padding-top: 20%;
}
}

@media screen and (width: 336px) and (height: 480px) {
  /* CSS rules for devices that are 336px wide AND 480px high */

   .content {
            height: auto%; /* Make content taller than the container to enable scrolling */

        }
		body {
			display: block;
			margin: 0;
			padding:0;
		
		    margin: 0;
            font-family: sans-serif;
			height: auto;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
         
            /* Hide scrollbars for body (cross-browser) */
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;     /* Firefox */
        }
        body::-webkit-scrollbar {
            display: none;             /* Chrome, Safari, Opera */
        }
		img {
  display: block;
  width: 100%;

  margin: auto;
  image-rendering: auto;

	padding-top: 20%;
}
}

@media screen and (min-width: 336px) {
  /* Your CSS rules for screens 336px wide and above go here */
   .content {
            height: auto; /* Make content taller than the container to enable scrolling */

        }
		
body {
			display: block;
			margin: 0;
			padding:0;
		
		    margin: 0;
            font-family: sans-serif;
			height: auto;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
         
            /* Hide scrollbars for body (cross-browser) */
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;     /* Firefox */
        }
        body::-webkit-scrollbar {
            display: none;             /* Chrome, Safari, Opera */
        }
		img {
  display: block;
  width: 100%;

  margin: auto;
  image-rendering: auto;

	padding-top: 20%;
}		
}

           
  
    </style>
</head>
<body>

    <div class="scroll-container" id="myScrollContainer">
        <div class="content">
           <div><img src="o.png" usemap="#workmap" alt="o.png" class="transparent shrinkToFit" >
		 

		 <map name="workmap">
	<area shape="circle" alt="Omar Labiade" href="" coords="767,1122,600">
	<area shape="rect" alt="Contact" href="coffee.vcf" coords="14,1905,1520,3000">
	<area shape="rect" alt="Omar Labiade" href="" coords="1857,371,3825,619">


       
		
</map>
		   
		   
		   
		   
		   
		   
		   
		   <div>
        </div>
    </div>

    <script>
        const scrollContainer = document.getElementById('myScrollContainer');
        const scrollStep = 100; // Pixels to scroll per mouse wheel click or key press

        // --- Mouse Wheel Scrolling ---
        scrollContainer.addEventListener('wheel', (event) => {
            event.preventDefault(); // Prevent default scroll behavior for the container
            
            // Determine scroll direction and amount
            // event.deltaY is positive when scrolling down, negative when scrolling up
            if (event.deltaY > 0) {
                // Scroll down
                scrollContainer.scrollTop = Math.min(
                    scrollContainer.scrollHeight - scrollContainer.clientHeight,
                    scrollContainer.scrollTop + scrollStep
                );
            } else {
                // Scroll up
                scrollContainer.scrollTop = Math.max(
                    0,
                    scrollContainer.scrollTop - scrollStep
                );
            }
        });

        // --- Keyboard Scrolling (Arrow Up/Down) ---
        document.addEventListener('keydown', (event) => {
            // Only act if the scrollContainer is the target OR if no specific element is focused
            // This prevents interfering with other inputs like text fields
            if (document.activeElement === scrollContainer || !document.activeElement || document.activeElement === document.body) {
                if (event.key === 'ArrowDown') {
                    event.preventDefault(); // Prevent default browser scroll
                    scrollContainer.scrollTop = Math.min(
                        scrollContainer.scrollHeight - scrollContainer.clientHeight,
                        scrollContainer.scrollTop + scrollStep
                    );
                } else if (event.key === 'ArrowUp') {
                    event.preventDefault(); // Prevent default browser scroll
                    scrollContainer.scrollTop = Math.max(
                        0,
                        scrollContainer.scrollTop - scrollStep
                    );
                }
            }
        });
    </script>

</div></div></body></html>