<?php
	//Function Declaration
	function a($name){ //$name is formal arg
		echo "Hello $name from a"; //Statement 
		echo '<br>'; //break line
		
	}
	
    function b($name){ //$name is formal arg
		
		a($name); //$name is actual arg
		echo '<br>'; //break line
	}
	
     
	function c($name){ //$name is formal arg
		b($name); //$name is actual arg 
		echo '<br>'; //break line
		
	}
	
    function d($name){ //$name is formal arg
		
		c($name); //$name is actual arg  
		echo '<br>'; //break line
	}

      
	function e($name){ //$name is formal arg
		d($name); //$name is actual arg 
		echo '<br>'; //break line
		
	}
	
    function f($name){ //$name is formal arg
		
		e($name); //$name is actual arg
		echo '<br>';//break line
	}

	function g($name){ //$name is formal arg
		f($name); //$name is actual arg 
		echo '<br>'; //break line
		
	}
    function h($name){ //$name is formal arg
		
		g($name); //$name is actual arg
		echo '<br>';//break line
	}
	
    
	function i($name){ //$name is formal arg
		
		h($name); //$name is actual arg
		echo '<br>'; //break line
		
	}
    function j($name){ //$name is formal arg
		
		i($name); //$name is actual arg
	}

	function k($name){ //$name is formal arg
		
		j($name);//$name is actual arg
		echo '<br>'; //break line
		
	}
    function l($name){ //$name is formal arg
		
		k($name); //$name is actual arg
	}


	function m($name){ //$name is formal arg
		l($name); //$name is actual arg 
		echo '<br>'; //break line
		
	}
    function n($name){ //$name is formal arg
		
		m($name); //$name is actual arg
	}


	function o($name){ //$name is formal arg
		n($name); //$name is actual arg 
		echo '<br>'; //break line
		
	}
    function p($name){ //$name is formal arg
		
		o($name); //$name is actual arg
	}


	function q($name){ //$name is formal arg
		p($name); //$name is actual arg 
		echo '<br>'; //break line
		
	}
    function r($name){ //$name is formal arg
		
		q($name); //$name is actual arg
	}


	function s($name){ //$name is formal arg
		r($name);//$name is actual arg
		echo '<br>'; //break line
		
	}
    function t($name){ //$name is formal arg
		
		s($name); //$name is actual arg
	}

	function u($name){ //$name is formal arg
		t($name);//$name is actual arg 
		echo '<br>'; //break line
		
	}
    function v($name){ //$name is formal arg
		
		u($name); //$name is actual arg
	}
	
	function w($name){ //$name is formal arg
		v($name);//$name is actual arg
		echo '<br>'; //break line
		
	}
    function x($name){ //$name is formal arg
		
		w($name); //$name is actual arg
	}
	
	function y($name){ //$name is formal arg
		x($name);//$name is actual arg 
		echo '<br>'; //break line
		
	}
    function z($name){ //$name is formal arg
		
		y($name); //$name is actual arg
	}
    //Function Calling
	z('mahima'); //mahima is actual arg
?>