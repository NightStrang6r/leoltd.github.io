var el1 = document.getElementById('animation_wrapper_1'),
				el2 = document.getElementById('animation_wrapper_2'),
				el3 = document.getElementById('animation_wrapper_3'),
				el4 = document.getElementById('animation_wrapper_4'),
				el5 = document.getElementById('animation_wrapper_5'),
				el6 = document.getElementById('animation_wrapper_6');
				
			function animation_img(){
				$("#animation_img").fadeIn(1500);
			}
			function animation_title(){
				$("#animation_title").fadeIn(1500);
			}
			function animation_second_title(){
				$("#animation_second_title").fadeIn(1500);
			}
			function animation_timer(){
				$("#animation_timer").fadeIn(1500);
			}
			function animation_clock(){
				$("#digital_watch").fadeIn(1500);
			}
			function animation_wrapper(){
				function animation_wrapper2_1(){
					for(var i = 0.01; i <= 1; i+=0.1){
						el1.setAttribute('style','opacity: ' + i + ';');
					}
				}
				function animation_wrapper2_2(){
					for(var i = 0.01; i <= 1; i+=0.1){
						el2.setAttribute('style','opacity: ' + i + ';');
					}
				}
				function animation_wrapper2_3(){
					for(var i = 0.01; i <= 1; i+=0.1){
						el3.setAttribute('style','opacity: ' + i + ';');
					}
				}
				function animation_wrapper2_4(){
					for(var i = 0.01; i <= 1; i+=0.1){
						el4.setAttribute('style','opacity: ' + i + ';');
					}
				}
				function animation_wrapper2_5(){
					for(var i = 0.01; i <= 1; i+=0.1){
						el5.setAttribute('style','opacity: ' + i + ';');
					}
				}
				function animation_wrapper2_6(){
					for(var i = 0.01; i <= 1; i+=0.1){
						el6.setAttribute('style','opacity: ' + i + ';');
					}
				}
				setTimeout(animation_wrapper2_1, 0);
				setTimeout(animation_wrapper2_2, 200);
				setTimeout(animation_wrapper2_3, 400);
				setTimeout(animation_wrapper2_4, 600);
				setTimeout(animation_wrapper2_5, 800);
				setTimeout(animation_wrapper2_6, 1000);
			}
			
			//animation_img();
			setTimeout(animation_img, 1000);
			setTimeout(animation_title, 2000);
			setTimeout(animation_second_title, 2500);
			setTimeout(animation_wrapper, 3000);
			setTimeout(animation_timer, 4000);
			setTimeout(animation_clock, 5000);
			