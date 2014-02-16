<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Vierge&#8482; Mobile Health App</title>
<link href="http://www.makadestudios.com/vierge/jquery.mobile-1.0a3.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
      function validateForm()
	  {var x=document.forms["bpForm"]["systolic_slider"].value;
	  if (x<="119")
	  { 
	  window.open("http://www.makadestudios.com/vierge/video-good-blood-pressure.html","_parent" );
      return true ;
	  }
	  else if (x>="181")
	  {
	  window.open("http://www.makadestudios.com/vierge/call-911.html","_parent" );
	  }
	  else 
		{
		window.open("http://www.makadestudios.com/vierge/video-high-blood-pressure.html","_parent" );
      return false ;
	   }
	  }
    </script> <!--END BLOOD PRESSURE validateForm JAVASCRIPT -->
  <!-- BEGIN Blood SUGAR validate Form JAVASCRIPT -->  
        <script type="text/javascript">
      function validateFormSugar()
	  {var x=document.forms["sugarForm"]["fastingbloodsugar"].value;
	  if (x<="100")
	  { 
	  window.open("http://www.makadestudios.com/vierge/video-good-blood-sugar.html","_parent" );
      return true ;
	  }
	  else if (x>="400")
	  {
	  window.open("http://www.makadestudios.com/vierge/call-911.html","_parent" );
	  }
	  else 
		{
		window.open("http://www.makadestudios.com/vierge/video-high-sugar.html","_parent" );
      return false ;
	   }
	  }
    </script> <!-- END BLOOD SUGAR VALIDATE FUNCTION -->
<script src="http://www.makadestudios.com/vierge/jquery-1.5.min.js" type="text/javascript"></script>
<script src="http://www.makadestudios.com/vierge/jquery.mobile-1.0a3.min.js" type="text/javascript"></script>
<!-- This reference to phonegap.js will allow for code hints as long as the current site has been configured as a mobile application. 
	 To configure the site as a mobile application, go to Site -> Mobile Applications -> Configure Application Framework... -->    
<script src="http://www.makadestudios.com/vierge/phonegap.js" type="text/javascript"></script>



<script type="text/javascript">
  //reset type=date inputs to text
  $( document ).bind( "mobileinit", function(){
    $.mobile.page.prototype.options.degradeInputs.date = true;
  }); </script>
  
<!-- END javascript for calender feature -->
</head> 
<body> 

<div data-role="page" id="homepage">
	<div data-role="header">
		<h1>Vierge&#8482; Mobile Health App (BETA)</h1>
	</div>
	<div data-role="content">	
		<ul data-role="listview">
			<li><a href="#diabetes">Diabetes Checkup</a></li>
            <li><a href="#bloodpressure">Blood Pressure Check</a></li>
			<li><a href="#wellness">Wellness Coach</a></li>
            <li><a href="#wellness">Set Appointments</a></li>
            <li><a href="#wellness">How Are You Feeling?</a></li>
            <li><a href="#wellness">Review Health History</a></li>
		</ul>		
	</div>
	<div data-role="footer">
		<h4>Tap Menu To Get Healthy!</h4>
	</div>
</div>

<div data-role="page" id="diabetes">
	<div data-role="header">
		<h1>Blood Sugar Checkup</h1>
	</div>
    <script type="text/javascript">
        var x="fastingbloodsugar"
		var y="postmealbloodsugar"
		var z="randombloodsugar"
        </script>
	<div data-role="content">  
        <div data-role="fieldcontain">
         <form name="sugarForm"  action="form-process.php" onsubmit="return validateFormSugar()" method="post"><strong>Fasting Blood Sugar:</strong><br>
        (8 Hrs. After Meal)</label>
          <input type="text" name="fastingbloodsugar" id="fastingsugar_input" value="0" min="0" max="500" />
        </div>
        <div data-role="fieldcontain">
        
          <label for="selectmenu" class="select"><strong>Post-Meal Blood Sugar:</strong><br>
        (2 Hrs. After Start Of Meal)</label>
          <select name="selectmenu" id="postmealbloodsugar">
            <option value="option 1"> 0 mg/dl </option>
<option value="option 2"> 1 mg/dl </option>
<option value="option 3"> 2 mg/dl </option>
<option value="option 4"> 3 mg/dl </option>
<option value="option 5"> 4 mg/dl </option>
<option value="option 6"> 5 mg/dl </option>
<option value="option 7"> 6 mg/dl </option>
<option value="option 8"> 7 mg/dl </option>
<option value="option 9"> 8 mg/dl </option>
<option value="option 10"> 9 mg/dl </option>
<option value="option 11"> 10 mg/dl </option>
<option value="option 12"> 11 mg/dl </option>
<option value="option 13"> 12 mg/dl </option>
<option value="option 14"> 13 mg/dl </option>
<option value="option 15"> 14 mg/dl </option>
<option value="option 16"> 15 mg/dl </option>
<option value="option 17"> 16 mg/dl </option>
<option value="option 18"> 17 mg/dl </option>
<option value="option 19"> 18 mg/dl </option>
<option value="option 20"> 19 mg/dl </option>
<option value="option 21"> 20 mg/dl </option>
<option value="option 22"> 21 mg/dl </option>
<option value="option 23"> 22 mg/dl </option>
<option value="option 24"> 23 mg/dl </option>
<option value="option 25"> 24 mg/dl </option>
<option value="option 26"> 25 mg/dl </option>
<option value="option 27"> 26 mg/dl </option>
<option value="option 28"> 27 mg/dl </option>
<option value="option 29"> 28 mg/dl </option>
<option value="option 30"> 29 mg/dl </option>
<option value="option 31"> 30 mg/dl </option>
<option value="option 32"> 31 mg/dl </option>
<option value="option 33"> 32 mg/dl </option>
<option value="option 34"> 33 mg/dl </option>
<option value="option 35"> 34 mg/dl </option>
<option value="option 36"> 35 mg/dl </option>
<option value="option 37"> 36 mg/dl </option>
<option value="option 38"> 37 mg/dl </option>
<option value="option 39"> 38 mg/dl </option>
<option value="option 40"> 39 mg/dl </option>
<option value="option 41"> 40 mg/dl </option>
<option value="option 42"> 41 mg/dl </option>
<option value="option 43"> 42 mg/dl </option>
<option value="option 44"> 43 mg/dl </option>
<option value="option 45"> 44 mg/dl </option>
<option value="option 46"> 45 mg/dl </option>
<option value="option 47"> 46 mg/dl </option>
<option value="option 48"> 47 mg/dl </option>
<option value="option 49"> 48 mg/dl </option>
<option value="option 50"> 49 mg/dl </option>
<option value="option 51"> 50 mg/dl </option>
<option value="option 52"> 51 mg/dl </option>
<option value="option 53"> 52 mg/dl </option>
<option value="option 54"> 53 mg/dl </option>
<option value="option 55"> 54 mg/dl </option>
<option value="option 56"> 55 mg/dl </option>
<option value="option 57"> 56 mg/dl </option>
<option value="option 58"> 57 mg/dl </option>
<option value="option 59"> 58 mg/dl </option>
<option value="option 60"> 59 mg/dl </option>
<option value="option 61"> 60 mg/dl </option>
<option value="option 62"> 61 mg/dl </option>
<option value="option 63"> 62 mg/dl </option>
<option value="option 64"> 63 mg/dl </option>
<option value="option 65"> 64 mg/dl </option>
<option value="option 66"> 65 mg/dl </option>
<option value="option 67"> 66 mg/dl </option>
<option value="option 68"> 67 mg/dl </option>
<option value="option 69"> 68 mg/dl </option>
<option value="option 70"> 69 mg/dl </option>
<option value="option 71"> 70 mg/dl </option>
<option value="option 72"> 71 mg/dl </option>
<option value="option 73"> 72 mg/dl </option>
<option value="option 74"> 73 mg/dl </option>
<option value="option 75"> 74 mg/dl </option>
<option value="option 76"> 75 mg/dl </option>
<option value="option 77"> 76 mg/dl </option>
<option value="option 78"> 77 mg/dl </option>
<option value="option 79"> 78 mg/dl </option>
<option value="option 80"> 79 mg/dl </option>
<option value="option 81"> 80 mg/dl </option>
<option value="option 82"> 81 mg/dl </option>
<option value="option 83"> 82 mg/dl </option>
<option value="option 84"> 83 mg/dl </option>
<option value="option 85"> 84 mg/dl </option>
<option value="option 86"> 85 mg/dl </option>
<option value="option 87"> 86 mg/dl </option>
<option value="option 88"> 87 mg/dl </option>
<option value="option 89"> 88 mg/dl </option>
<option value="option 90"> 89 mg/dl </option>
<option value="option 91"> 90 mg/dl </option>
<option value="option 92"> 91 mg/dl </option>
<option value="option 93"> 92 mg/dl </option>
<option value="option 94"> 93 mg/dl </option>
<option value="option 95"> 94 mg/dl </option>
<option value="option 96"> 95 mg/dl </option>
<option value="option 97"> 96 mg/dl </option>
<option value="option 98"> 97 mg/dl </option>
<option value="option 99"> 98 mg/dl </option>
<option value="option 100"> 99 mg/dl </option>
<option value="option 101"> 100 mg/dl </option>
<option value="option 102"> 101 mg/dl </option>
<option value="option 103"> 102 mg/dl </option>
<option value="option 104"> 103 mg/dl </option>
<option value="option 105"> 104 mg/dl </option>
<option value="option 106"> 105 mg/dl </option>
<option value="option 107"> 106 mg/dl </option>
<option value="option 108"> 107 mg/dl </option>
<option value="option 109"> 108 mg/dl </option>
<option value="option 110"> 109 mg/dl </option>
<option value="option 111"> 110 mg/dl </option>
<option value="option 112"> 111 mg/dl </option>
<option value="option 113"> 112 mg/dl </option>
<option value="option 114"> 113 mg/dl </option>
<option value="option 115"> 114 mg/dl </option>
<option value="option 116"> 115 mg/dl </option>
<option value="option 117"> 116 mg/dl </option>
<option value="option 118"> 117 mg/dl </option>
<option value="option 119"> 118 mg/dl </option>
<option value="option 120"> 119 mg/dl </option>
<option value="option 121"> 120 mg/dl </option>
<option value="option 122"> 121 mg/dl </option>
<option value="option 123"> 122 mg/dl </option>
<option value="option 124"> 123 mg/dl </option>
<option value="option 125"> 124 mg/dl </option>
<option value="option 126"> 125 mg/dl </option>
<option value="option 127"> 126 mg/dl </option>
<option value="option 128"> 127 mg/dl </option>
<option value="option 129"> 128 mg/dl </option>
<option value="option 130"> 129 mg/dl </option>
<option value="option 131"> 130 mg/dl </option>
<option value="option 132"> 131 mg/dl </option>
<option value="option 133"> 132 mg/dl </option>
<option value="option 134"> 133 mg/dl </option>
<option value="option 135"> 134 mg/dl </option>
<option value="option 136"> 135 mg/dl </option>
<option value="option 137"> 136 mg/dl </option>
<option value="option 138"> 137 mg/dl </option>
<option value="option 139"> 138 mg/dl </option>
<option value="option 140"> 139 mg/dl </option>
<option value="option 141"> 140 mg/dl </option>
<option value="option 142"> 141 mg/dl </option>
<option value="option 143"> 142 mg/dl </option>
<option value="option 144"> 143 mg/dl </option>
<option value="option 145"> 144 mg/dl </option>
<option value="option 146"> 145 mg/dl </option>
<option value="option 147"> 146 mg/dl </option>
<option value="option 148"> 147 mg/dl </option>
<option value="option 149"> 148 mg/dl </option>
<option value="option 150"> 149 mg/dl </option>
<option value="option 151"> 150 mg/dl </option>
<option value="option 152"> 151 mg/dl </option>
<option value="option 153"> 152 mg/dl </option>
<option value="option 154"> 153 mg/dl </option>
<option value="option 155"> 154 mg/dl </option>
<option value="option 156"> 155 mg/dl </option>
<option value="option 157"> 156 mg/dl </option>
<option value="option 158"> 157 mg/dl </option>
<option value="option 159"> 158 mg/dl </option>
<option value="option 160"> 159 mg/dl </option>
<option value="option 161"> 160 mg/dl </option>
<option value="option 162"> 161 mg/dl </option>
<option value="option 163"> 162 mg/dl </option>
<option value="option 164"> 163 mg/dl </option>
<option value="option 165"> 164 mg/dl </option>
<option value="option 166"> 165 mg/dl </option>
<option value="option 167"> 166 mg/dl </option>
<option value="option 168"> 167 mg/dl </option>
<option value="option 169"> 168 mg/dl </option>
<option value="option 170"> 169 mg/dl </option>
<option value="option 171"> 170 mg/dl </option>
<option value="option 172"> 171 mg/dl </option>
<option value="option 173"> 172 mg/dl </option>
<option value="option 174"> 173 mg/dl </option>
<option value="option 175"> 174 mg/dl </option>
<option value="option 176"> 175 mg/dl </option>
<option value="option 177"> 176 mg/dl </option>
<option value="option 178"> 177 mg/dl </option>
<option value="option 179"> 178 mg/dl </option>
<option value="option 180"> 179 mg/dl </option>
<option value="option 181"> 180 mg/dl </option>
<option value="option 182"> 181 mg/dl </option>
<option value="option 183"> 182 mg/dl </option>
<option value="option 184"> 183 mg/dl </option>
<option value="option 185"> 184 mg/dl </option>
<option value="option 186"> 185 mg/dl </option>
<option value="option 187"> 186 mg/dl </option>
<option value="option 188"> 187 mg/dl </option>
<option value="option 189"> 188 mg/dl </option>
<option value="option 190"> 189 mg/dl </option>
<option value="option 191"> 190 mg/dl </option>
<option value="option 192"> 191 mg/dl </option>
<option value="option 193"> 192 mg/dl </option>
<option value="option 194"> 193 mg/dl </option>
<option value="option 195"> 194 mg/dl </option>
<option value="option 196"> 195 mg/dl </option>
<option value="option 197"> 196 mg/dl </option>
<option value="option 198"> 197 mg/dl </option>
<option value="option 199"> 198 mg/dl </option>
<option value="option 200"> 199 mg/dl </option>
<option value="option 201"> 200 mg/dl </option>
<option value="option 202"> 201 mg/dl </option>
<option value="option 203"> 202 mg/dl </option>
<option value="option 204"> 203 mg/dl </option>
<option value="option 205"> 204 mg/dl </option>
<option value="option 206"> 205 mg/dl </option>
<option value="option 207"> 206 mg/dl </option>
<option value="option 208"> 207 mg/dl </option>
<option value="option 209"> 208 mg/dl </option>
<option value="option 210"> 209 mg/dl </option>
<option value="option 211"> 210 mg/dl </option>
<option value="option 212"> 211 mg/dl </option>
<option value="option 213"> 212 mg/dl </option>
<option value="option 214"> 213 mg/dl </option>
<option value="option 215"> 214 mg/dl </option>
<option value="option 216"> 215 mg/dl </option>
<option value="option 217"> 216 mg/dl </option>
<option value="option 218"> 217 mg/dl </option>
<option value="option 219"> 218 mg/dl </option>
<option value="option 220"> 219 mg/dl </option>
<option value="option 221"> 220 mg/dl </option>
<option value="option 222"> 221 mg/dl </option>
<option value="option 223"> 222 mg/dl </option>
<option value="option 224"> 223 mg/dl </option>
<option value="option 225"> 224 mg/dl </option>
<option value="option 226"> 225 mg/dl </option>
<option value="option 227"> 226 mg/dl </option>
<option value="option 228"> 227 mg/dl </option>
<option value="option 229"> 228 mg/dl </option>
<option value="option 230"> 229 mg/dl </option>
<option value="option 231"> 230 mg/dl </option>
<option value="option 232"> 231 mg/dl </option>
<option value="option 233"> 232 mg/dl </option>
<option value="option 234"> 233 mg/dl </option>
<option value="option 235"> 234 mg/dl </option>
<option value="option 236"> 235 mg/dl </option>
<option value="option 237"> 236 mg/dl </option>
<option value="option 238"> 237 mg/dl </option>
<option value="option 239"> 238 mg/dl </option>
<option value="option 240"> 239 mg/dl </option>
<option value="option 241"> 240 mg/dl </option>
<option value="option 242"> 241 mg/dl </option>
<option value="option 243"> 242 mg/dl </option>
<option value="option 244"> 243 mg/dl </option>
<option value="option 245"> 244 mg/dl </option>
<option value="option 246"> 245 mg/dl </option>
<option value="option 247"> 246 mg/dl </option>
<option value="option 248"> 247 mg/dl </option>
<option value="option 249"> 248 mg/dl </option>
<option value="option 250"> 249 mg/dl </option>
<option value="option 251"> 250 mg/dl </option>
<option value="option 252"> 251 mg/dl </option>
<option value="option 253"> 252 mg/dl </option>
<option value="option 254"> 253 mg/dl </option>
<option value="option 255"> 254 mg/dl </option>
<option value="option 256"> 255 mg/dl </option>
<option value="option 257"> 256 mg/dl </option>
<option value="option 258"> 257 mg/dl </option>
<option value="option 259"> 258 mg/dl </option>
<option value="option 260"> 259 mg/dl </option>
<option value="option 261"> 260 mg/dl </option>
<option value="option 262"> 261 mg/dl </option>
<option value="option 263"> 262 mg/dl </option>
<option value="option 264"> 263 mg/dl </option>
<option value="option 265"> 264 mg/dl </option>
<option value="option 266"> 265 mg/dl </option>
<option value="option 267"> 266 mg/dl </option>
<option value="option 268"> 267 mg/dl </option>
<option value="option 269"> 268 mg/dl </option>
<option value="option 270"> 269 mg/dl </option>
<option value="option 271"> 270 mg/dl </option>
<option value="option 272"> 271 mg/dl </option>
<option value="option 273"> 272 mg/dl </option>
<option value="option 274"> 273 mg/dl </option>
<option value="option 275"> 274 mg/dl </option>
<option value="option 276"> 275 mg/dl </option>
<option value="option 277"> 276 mg/dl </option>
<option value="option 278"> 277 mg/dl </option>
<option value="option 279"> 278 mg/dl </option>
<option value="option 280"> 279 mg/dl </option>
<option value="option 281"> 280 mg/dl </option>
<option value="option 282"> 281 mg/dl </option>
<option value="option 283"> 282 mg/dl </option>
<option value="option 284"> 283 mg/dl </option>
<option value="option 285"> 284 mg/dl </option>
<option value="option 286"> 285 mg/dl </option>
<option value="option 287"> 286 mg/dl </option>
<option value="option 288"> 287 mg/dl </option>
<option value="option 289"> 288 mg/dl </option>
<option value="option 290"> 289 mg/dl </option>
<option value="option 291"> 290 mg/dl </option>
<option value="option 292"> 291 mg/dl </option>
<option value="option 293"> 292 mg/dl </option>
<option value="option 294"> 293 mg/dl </option>
<option value="option 295"> 294 mg/dl </option>
<option value="option 296"> 295 mg/dl </option>
<option value="option 297"> 296 mg/dl </option>
<option value="option 298"> 297 mg/dl </option>
<option value="option 299"> 298 mg/dl </option>
<option value="option 300"> 299 mg/dl </option>
<option value="option 301"> 300 mg/dl </option>
<option value="option 302"> 301 mg/dl </option>
<option value="option 303"> 302 mg/dl </option>
<option value="option 304"> 303 mg/dl </option>
<option value="option 305"> 304 mg/dl </option>
<option value="option 306"> 305 mg/dl </option>
<option value="option 307"> 306 mg/dl </option>
<option value="option 308"> 307 mg/dl </option>
<option value="option 309"> 308 mg/dl </option>
<option value="option 310"> 309 mg/dl </option>
<option value="option 311"> 310 mg/dl </option>
<option value="option 312"> 311 mg/dl </option>
<option value="option 313"> 312 mg/dl </option>
<option value="option 314"> 313 mg/dl </option>
<option value="option 315"> 314 mg/dl </option>
<option value="option 316"> 315 mg/dl </option>
<option value="option 317"> 316 mg/dl </option>
<option value="option 318"> 317 mg/dl </option>
<option value="option 319"> 318 mg/dl </option>
<option value="option 320"> 319 mg/dl </option>
<option value="option 321"> 320 mg/dl </option>
<option value="option 322"> 321 mg/dl </option>
<option value="option 323"> 322 mg/dl </option>
<option value="option 324"> 323 mg/dl </option>
<option value="option 325"> 324 mg/dl </option>
<option value="option 326"> 325 mg/dl </option>
<option value="option 327"> 326 mg/dl </option>
<option value="option 328"> 327 mg/dl </option>
<option value="option 329"> 328 mg/dl </option>
<option value="option 330"> 329 mg/dl </option>
<option value="option 331"> 330 mg/dl </option>
<option value="option 332"> 331 mg/dl </option>
<option value="option 333"> 332 mg/dl </option>
<option value="option 334"> 333 mg/dl </option>
<option value="option 335"> 334 mg/dl </option>
<option value="option 336"> 335 mg/dl </option>
<option value="option 337"> 336 mg/dl </option>
<option value="option 338"> 337 mg/dl </option>
<option value="option 339"> 338 mg/dl </option>
<option value="option 340"> 339 mg/dl </option>
<option value="option 341"> 340 mg/dl </option>
<option value="option 342"> 341 mg/dl </option>
<option value="option 343"> 342 mg/dl </option>
<option value="option 344"> 343 mg/dl </option>
<option value="option 345"> 344 mg/dl </option>
<option value="option 346"> 345 mg/dl </option>
<option value="option 347"> 346 mg/dl </option>
<option value="option 348"> 347 mg/dl </option>
<option value="option 349"> 348 mg/dl </option>
<option value="option 350"> 349 mg/dl </option>
<option value="option 351"> 350 mg/dl </option>
<option value="option 352"> 351 mg/dl </option>
<option value="option 353"> 352 mg/dl </option>
<option value="option 354"> 353 mg/dl </option>
<option value="option 355"> 354 mg/dl </option>
<option value="option 356"> 355 mg/dl </option>
<option value="option 357"> 356 mg/dl </option>
<option value="option 358"> 357 mg/dl </option>
<option value="option 359"> 358 mg/dl </option>
<option value="option 360"> 359 mg/dl </option>
<option value="option 361"> 360 mg/dl </option>
<option value="option 362"> 361 mg/dl </option>
<option value="option 363"> 362 mg/dl </option>
<option value="option 364"> 363 mg/dl </option>
<option value="option 365"> 364 mg/dl </option>
<option value="option 366"> 365 mg/dl </option>
<option value="option 367"> 366 mg/dl </option>
<option value="option 368"> 367 mg/dl </option>
<option value="option 369"> 368 mg/dl </option>
<option value="option 370"> 369 mg/dl </option>
<option value="option 371"> 370 mg/dl </option>
<option value="option 372"> 371 mg/dl </option>
<option value="option 373"> 372 mg/dl </option>
<option value="option 374"> 373 mg/dl </option>
<option value="option 375"> 374 mg/dl </option>
<option value="option 376"> 375 mg/dl </option>
<option value="option 377"> 376 mg/dl </option>
<option value="option 378"> 377 mg/dl </option>
<option value="option 379"> 378 mg/dl </option>
<option value="option 380"> 379 mg/dl </option>
<option value="option 381"> 380 mg/dl </option>
<option value="option 382"> 381 mg/dl </option>
<option value="option 383"> 382 mg/dl </option>
<option value="option 384"> 383 mg/dl </option>
<option value="option 385"> 384 mg/dl </option>
<option value="option 386"> 385 mg/dl </option>
<option value="option 387"> 386 mg/dl </option>
<option value="option 388"> 387 mg/dl </option>
<option value="option 389"> 388 mg/dl </option>
<option value="option 390"> 389 mg/dl </option>
<option value="option 391"> 390 mg/dl </option>
<option value="option 392"> 391 mg/dl </option>
<option value="option 393"> 392 mg/dl </option>
<option value="option 394"> 393 mg/dl </option>
<option value="option 395"> 394 mg/dl </option>
<option value="option 396"> 395 mg/dl </option>
<option value="option 397"> 396 mg/dl </option>
<option value="option 398"> 397 mg/dl </option>
<option value="option 399"> 398 mg/dl </option>
<option value="option 400"> 399 mg/dl </option>
<option value="option 401"> 400 mg/dl </option>
<option value="option 402"> 401 mg/dl </option>
<option value="option 403"> 402 mg/dl </option>
<option value="option 404"> 403 mg/dl </option>
<option value="option 405"> 404 mg/dl </option>
<option value="option 406"> 405 mg/dl </option>
<option value="option 407"> 406 mg/dl </option>
<option value="option 408"> 407 mg/dl </option>
<option value="option 409"> 408 mg/dl </option>
<option value="option 410"> 409 mg/dl </option>
<option value="option 411"> 410 mg/dl </option>
<option value="option 412"> 411 mg/dl </option>
<option value="option 413"> 412 mg/dl </option>
<option value="option 414"> 413 mg/dl </option>
<option value="option 415"> 414 mg/dl </option>
<option value="option 416"> 415 mg/dl </option>
<option value="option 417"> 416 mg/dl </option>
<option value="option 418"> 417 mg/dl </option>
<option value="option 419"> 418 mg/dl </option>
<option value="option 420"> 419 mg/dl </option>
<option value="option 421"> 420 mg/dl </option>
<option value="option 422"> 421 mg/dl </option>
<option value="option 423"> 422 mg/dl </option>
<option value="option 424"> 423 mg/dl </option>
<option value="option 425"> 424 mg/dl </option>
<option value="option 426"> 425 mg/dl </option>
<option value="option 427"> 426 mg/dl </option>
<option value="option 428"> 427 mg/dl </option>
<option value="option 429"> 428 mg/dl </option>
<option value="option 430"> 429 mg/dl </option>
<option value="option 431"> 430 mg/dl </option>
<option value="option 432"> 431 mg/dl </option>
<option value="option 433"> 432 mg/dl </option>
<option value="option 434"> 433 mg/dl </option>
<option value="option 435"> 434 mg/dl </option>
<option value="option 436"> 435 mg/dl </option>
<option value="option 437"> 436 mg/dl </option>
<option value="option 438"> 437 mg/dl </option>
<option value="option 439"> 438 mg/dl </option>
<option value="option 440"> 439 mg/dl </option>
<option value="option 441"> 440 mg/dl </option>
<option value="option 442"> 441 mg/dl </option>
<option value="option 443"> 442 mg/dl </option>
<option value="option 444"> 443 mg/dl </option>
<option value="option 445"> 444 mg/dl </option>
<option value="option 446"> 445 mg/dl </option>
<option value="option 447"> 446 mg/dl </option>
<option value="option 448"> 447 mg/dl </option>
<option value="option 449"> 448 mg/dl </option>
<option value="option 450"> 449 mg/dl </option>
<option value="option 451"> 450 mg/dl </option>
<option value="option 452"> 451 mg/dl </option>
<option value="option 453"> 452 mg/dl </option>
<option value="option 454"> 453 mg/dl </option>
<option value="option 455"> 454 mg/dl </option>
<option value="option 456"> 455 mg/dl </option>
<option value="option 457"> 456 mg/dl </option>
<option value="option 458"> 457 mg/dl </option>
<option value="option 459"> 458 mg/dl </option>
<option value="option 460"> 459 mg/dl </option>
<option value="option 461"> 460 mg/dl </option>
<option value="option 462"> 461 mg/dl </option>
<option value="option 463"> 462 mg/dl </option>
<option value="option 464"> 463 mg/dl </option>
<option value="option 465"> 464 mg/dl </option>
<option value="option 466"> 465 mg/dl </option>
<option value="option 467"> 466 mg/dl </option>
<option value="option 468"> 467 mg/dl </option>
<option value="option 469"> 468 mg/dl </option>
<option value="option 470"> 469 mg/dl </option>
<option value="option 471"> 470 mg/dl </option>
<option value="option 472"> 471 mg/dl </option>
<option value="option 473"> 472 mg/dl </option>
<option value="option 474"> 473 mg/dl </option>
<option value="option 475"> 474 mg/dl </option>
<option value="option 476"> 475 mg/dl </option>
<option value="option 477"> 476 mg/dl </option>
<option value="option 478"> 477 mg/dl </option>
<option value="option 479"> 478 mg/dl </option>
<option value="option 480"> 479 mg/dl </option>
<option value="option 481"> 480 mg/dl </option>
<option value="option 482"> 481 mg/dl </option>
<option value="option 483"> 482 mg/dl </option>
<option value="option 484"> 483 mg/dl </option>
<option value="option 485"> 484 mg/dl </option>
<option value="option 486"> 485 mg/dl </option>
<option value="option 487"> 486 mg/dl </option>
<option value="option 488"> 487 mg/dl </option>
<option value="option 489"> 488 mg/dl </option>
<option value="option 490"> 489 mg/dl </option>
<option value="option 491"> 490 mg/dl </option>
<option value="option 492"> 491 mg/dl </option>
<option value="option 493"> 492 mg/dl </option>
<option value="option 494"> 493 mg/dl </option>
<option value="option 495"> 494 mg/dl </option>
<option value="option 496"> 495 mg/dl </option>
<option value="option 497"> 496 mg/dl </option>
<option value="option 498"> 497 mg/dl </option>
<option value="option 499"> 498 mg/dl </option>
<option value="option 500"> 499 mg/dl </option>
<option value="option 501"> 500 mg/dl </option>
          </select>
        </div>
        <div data-role="fieldcontain">
          <label for="selectmenu" class="select"><strong>Random Blood Sugar:</strong><br>
(Anytime)</label>
          <select name="selectmenu" id="randombloodsugar">
            <option value="option 1"> 0 mg/dl </option>
<option value="option 2"> 1 mg/dl </option>
<option value="option 3"> 2 mg/dl </option>
<option value="option 4"> 3 mg/dl </option>
<option value="option 5"> 4 mg/dl </option>
<option value="option 6"> 5 mg/dl </option>
<option value="option 7"> 6 mg/dl </option>
<option value="option 8"> 7 mg/dl </option>
<option value="option 9"> 8 mg/dl </option>
<option value="option 10"> 9 mg/dl </option>
<option value="option 11"> 10 mg/dl </option>
<option value="option 12"> 11 mg/dl </option>
<option value="option 13"> 12 mg/dl </option>
<option value="option 14"> 13 mg/dl </option>
<option value="option 15"> 14 mg/dl </option>
<option value="option 16"> 15 mg/dl </option>
<option value="option 17"> 16 mg/dl </option>
<option value="option 18"> 17 mg/dl </option>
<option value="option 19"> 18 mg/dl </option>
<option value="option 20"> 19 mg/dl </option>
<option value="option 21"> 20 mg/dl </option>
<option value="option 22"> 21 mg/dl </option>
<option value="option 23"> 22 mg/dl </option>
<option value="option 24"> 23 mg/dl </option>
<option value="option 25"> 24 mg/dl </option>
<option value="option 26"> 25 mg/dl </option>
<option value="option 27"> 26 mg/dl </option>
<option value="option 28"> 27 mg/dl </option>
<option value="option 29"> 28 mg/dl </option>
<option value="option 30"> 29 mg/dl </option>
<option value="option 31"> 30 mg/dl </option>
<option value="option 32"> 31 mg/dl </option>
<option value="option 33"> 32 mg/dl </option>
<option value="option 34"> 33 mg/dl </option>
<option value="option 35"> 34 mg/dl </option>
<option value="option 36"> 35 mg/dl </option>
<option value="option 37"> 36 mg/dl </option>
<option value="option 38"> 37 mg/dl </option>
<option value="option 39"> 38 mg/dl </option>
<option value="option 40"> 39 mg/dl </option>
<option value="option 41"> 40 mg/dl </option>
<option value="option 42"> 41 mg/dl </option>
<option value="option 43"> 42 mg/dl </option>
<option value="option 44"> 43 mg/dl </option>
<option value="option 45"> 44 mg/dl </option>
<option value="option 46"> 45 mg/dl </option>
<option value="option 47"> 46 mg/dl </option>
<option value="option 48"> 47 mg/dl </option>
<option value="option 49"> 48 mg/dl </option>
<option value="option 50"> 49 mg/dl </option>
<option value="option 51"> 50 mg/dl </option>
<option value="option 52"> 51 mg/dl </option>
<option value="option 53"> 52 mg/dl </option>
<option value="option 54"> 53 mg/dl </option>
<option value="option 55"> 54 mg/dl </option>
<option value="option 56"> 55 mg/dl </option>
<option value="option 57"> 56 mg/dl </option>
<option value="option 58"> 57 mg/dl </option>
<option value="option 59"> 58 mg/dl </option>
<option value="option 60"> 59 mg/dl </option>
<option value="option 61"> 60 mg/dl </option>
<option value="option 62"> 61 mg/dl </option>
<option value="option 63"> 62 mg/dl </option>
<option value="option 64"> 63 mg/dl </option>
<option value="option 65"> 64 mg/dl </option>
<option value="option 66"> 65 mg/dl </option>
<option value="option 67"> 66 mg/dl </option>
<option value="option 68"> 67 mg/dl </option>
<option value="option 69"> 68 mg/dl </option>
<option value="option 70"> 69 mg/dl </option>
<option value="option 71"> 70 mg/dl </option>
<option value="option 72"> 71 mg/dl </option>
<option value="option 73"> 72 mg/dl </option>
<option value="option 74"> 73 mg/dl </option>
<option value="option 75"> 74 mg/dl </option>
<option value="option 76"> 75 mg/dl </option>
<option value="option 77"> 76 mg/dl </option>
<option value="option 78"> 77 mg/dl </option>
<option value="option 79"> 78 mg/dl </option>
<option value="option 80"> 79 mg/dl </option>
<option value="option 81"> 80 mg/dl </option>
<option value="option 82"> 81 mg/dl </option>
<option value="option 83"> 82 mg/dl </option>
<option value="option 84"> 83 mg/dl </option>
<option value="option 85"> 84 mg/dl </option>
<option value="option 86"> 85 mg/dl </option>
<option value="option 87"> 86 mg/dl </option>
<option value="option 88"> 87 mg/dl </option>
<option value="option 89"> 88 mg/dl </option>
<option value="option 90"> 89 mg/dl </option>
<option value="option 91"> 90 mg/dl </option>
<option value="option 92"> 91 mg/dl </option>
<option value="option 93"> 92 mg/dl </option>
<option value="option 94"> 93 mg/dl </option>
<option value="option 95"> 94 mg/dl </option>
<option value="option 96"> 95 mg/dl </option>
<option value="option 97"> 96 mg/dl </option>
<option value="option 98"> 97 mg/dl </option>
<option value="option 99"> 98 mg/dl </option>
<option value="option 100"> 99 mg/dl </option>
<option value="option 101"> 100 mg/dl </option>
<option value="option 102"> 101 mg/dl </option>
<option value="option 103"> 102 mg/dl </option>
<option value="option 104"> 103 mg/dl </option>
<option value="option 105"> 104 mg/dl </option>
<option value="option 106"> 105 mg/dl </option>
<option value="option 107"> 106 mg/dl </option>
<option value="option 108"> 107 mg/dl </option>
<option value="option 109"> 108 mg/dl </option>
<option value="option 110"> 109 mg/dl </option>
<option value="option 111"> 110 mg/dl </option>
<option value="option 112"> 111 mg/dl </option>
<option value="option 113"> 112 mg/dl </option>
<option value="option 114"> 113 mg/dl </option>
<option value="option 115"> 114 mg/dl </option>
<option value="option 116"> 115 mg/dl </option>
<option value="option 117"> 116 mg/dl </option>
<option value="option 118"> 117 mg/dl </option>
<option value="option 119"> 118 mg/dl </option>
<option value="option 120"> 119 mg/dl </option>
<option value="option 121"> 120 mg/dl </option>
<option value="option 122"> 121 mg/dl </option>
<option value="option 123"> 122 mg/dl </option>
<option value="option 124"> 123 mg/dl </option>
<option value="option 125"> 124 mg/dl </option>
<option value="option 126"> 125 mg/dl </option>
<option value="option 127"> 126 mg/dl </option>
<option value="option 128"> 127 mg/dl </option>
<option value="option 129"> 128 mg/dl </option>
<option value="option 130"> 129 mg/dl </option>
<option value="option 131"> 130 mg/dl </option>
<option value="option 132"> 131 mg/dl </option>
<option value="option 133"> 132 mg/dl </option>
<option value="option 134"> 133 mg/dl </option>
<option value="option 135"> 134 mg/dl </option>
<option value="option 136"> 135 mg/dl </option>
<option value="option 137"> 136 mg/dl </option>
<option value="option 138"> 137 mg/dl </option>
<option value="option 139"> 138 mg/dl </option>
<option value="option 140"> 139 mg/dl </option>
<option value="option 141"> 140 mg/dl </option>
<option value="option 142"> 141 mg/dl </option>
<option value="option 143"> 142 mg/dl </option>
<option value="option 144"> 143 mg/dl </option>
<option value="option 145"> 144 mg/dl </option>
<option value="option 146"> 145 mg/dl </option>
<option value="option 147"> 146 mg/dl </option>
<option value="option 148"> 147 mg/dl </option>
<option value="option 149"> 148 mg/dl </option>
<option value="option 150"> 149 mg/dl </option>
<option value="option 151"> 150 mg/dl </option>
<option value="option 152"> 151 mg/dl </option>
<option value="option 153"> 152 mg/dl </option>
<option value="option 154"> 153 mg/dl </option>
<option value="option 155"> 154 mg/dl </option>
<option value="option 156"> 155 mg/dl </option>
<option value="option 157"> 156 mg/dl </option>
<option value="option 158"> 157 mg/dl </option>
<option value="option 159"> 158 mg/dl </option>
<option value="option 160"> 159 mg/dl </option>
<option value="option 161"> 160 mg/dl </option>
<option value="option 162"> 161 mg/dl </option>
<option value="option 163"> 162 mg/dl </option>
<option value="option 164"> 163 mg/dl </option>
<option value="option 165"> 164 mg/dl </option>
<option value="option 166"> 165 mg/dl </option>
<option value="option 167"> 166 mg/dl </option>
<option value="option 168"> 167 mg/dl </option>
<option value="option 169"> 168 mg/dl </option>
<option value="option 170"> 169 mg/dl </option>
<option value="option 171"> 170 mg/dl </option>
<option value="option 172"> 171 mg/dl </option>
<option value="option 173"> 172 mg/dl </option>
<option value="option 174"> 173 mg/dl </option>
<option value="option 175"> 174 mg/dl </option>
<option value="option 176"> 175 mg/dl </option>
<option value="option 177"> 176 mg/dl </option>
<option value="option 178"> 177 mg/dl </option>
<option value="option 179"> 178 mg/dl </option>
<option value="option 180"> 179 mg/dl </option>
<option value="option 181"> 180 mg/dl </option>
<option value="option 182"> 181 mg/dl </option>
<option value="option 183"> 182 mg/dl </option>
<option value="option 184"> 183 mg/dl </option>
<option value="option 185"> 184 mg/dl </option>
<option value="option 186"> 185 mg/dl </option>
<option value="option 187"> 186 mg/dl </option>
<option value="option 188"> 187 mg/dl </option>
<option value="option 189"> 188 mg/dl </option>
<option value="option 190"> 189 mg/dl </option>
<option value="option 191"> 190 mg/dl </option>
<option value="option 192"> 191 mg/dl </option>
<option value="option 193"> 192 mg/dl </option>
<option value="option 194"> 193 mg/dl </option>
<option value="option 195"> 194 mg/dl </option>
<option value="option 196"> 195 mg/dl </option>
<option value="option 197"> 196 mg/dl </option>
<option value="option 198"> 197 mg/dl </option>
<option value="option 199"> 198 mg/dl </option>
<option value="option 200"> 199 mg/dl </option>
<option value="option 201"> 200 mg/dl </option>
<option value="option 202"> 201 mg/dl </option>
<option value="option 203"> 202 mg/dl </option>
<option value="option 204"> 203 mg/dl </option>
<option value="option 205"> 204 mg/dl </option>
<option value="option 206"> 205 mg/dl </option>
<option value="option 207"> 206 mg/dl </option>
<option value="option 208"> 207 mg/dl </option>
<option value="option 209"> 208 mg/dl </option>
<option value="option 210"> 209 mg/dl </option>
<option value="option 211"> 210 mg/dl </option>
<option value="option 212"> 211 mg/dl </option>
<option value="option 213"> 212 mg/dl </option>
<option value="option 214"> 213 mg/dl </option>
<option value="option 215"> 214 mg/dl </option>
<option value="option 216"> 215 mg/dl </option>
<option value="option 217"> 216 mg/dl </option>
<option value="option 218"> 217 mg/dl </option>
<option value="option 219"> 218 mg/dl </option>
<option value="option 220"> 219 mg/dl </option>
<option value="option 221"> 220 mg/dl </option>
<option value="option 222"> 221 mg/dl </option>
<option value="option 223"> 222 mg/dl </option>
<option value="option 224"> 223 mg/dl </option>
<option value="option 225"> 224 mg/dl </option>
<option value="option 226"> 225 mg/dl </option>
<option value="option 227"> 226 mg/dl </option>
<option value="option 228"> 227 mg/dl </option>
<option value="option 229"> 228 mg/dl </option>
<option value="option 230"> 229 mg/dl </option>
<option value="option 231"> 230 mg/dl </option>
<option value="option 232"> 231 mg/dl </option>
<option value="option 233"> 232 mg/dl </option>
<option value="option 234"> 233 mg/dl </option>
<option value="option 235"> 234 mg/dl </option>
<option value="option 236"> 235 mg/dl </option>
<option value="option 237"> 236 mg/dl </option>
<option value="option 238"> 237 mg/dl </option>
<option value="option 239"> 238 mg/dl </option>
<option value="option 240"> 239 mg/dl </option>
<option value="option 241"> 240 mg/dl </option>
<option value="option 242"> 241 mg/dl </option>
<option value="option 243"> 242 mg/dl </option>
<option value="option 244"> 243 mg/dl </option>
<option value="option 245"> 244 mg/dl </option>
<option value="option 246"> 245 mg/dl </option>
<option value="option 247"> 246 mg/dl </option>
<option value="option 248"> 247 mg/dl </option>
<option value="option 249"> 248 mg/dl </option>
<option value="option 250"> 249 mg/dl </option>
<option value="option 251"> 250 mg/dl </option>
<option value="option 252"> 251 mg/dl </option>
<option value="option 253"> 252 mg/dl </option>
<option value="option 254"> 253 mg/dl </option>
<option value="option 255"> 254 mg/dl </option>

<option value="option 256"> 255 mg/dl </option>
<option value="option 257"> 256 mg/dl </option>
<option value="option 258"> 257 mg/dl </option>
<option value="option 259"> 258 mg/dl </option>
<option value="option 260"> 259 mg/dl </option>
<option value="option 261"> 260 mg/dl </option>
<option value="option 262"> 261 mg/dl </option>
<option value="option 263"> 262 mg/dl </option>
<option value="option 264"> 263 mg/dl </option>
<option value="option 265"> 264 mg/dl </option>
<option value="option 266"> 265 mg/dl </option>
<option value="option 267"> 266 mg/dl </option>
<option value="option 268"> 267 mg/dl </option>
<option value="option 269"> 268 mg/dl </option>
<option value="option 270"> 269 mg/dl </option>
<option value="option 271"> 270 mg/dl </option>
<option value="option 272"> 271 mg/dl </option>
<option value="option 273"> 272 mg/dl </option>
<option value="option 274"> 273 mg/dl </option>
<option value="option 275"> 274 mg/dl </option>
<option value="option 276"> 275 mg/dl </option>
<option value="option 277"> 276 mg/dl </option>
<option value="option 278"> 277 mg/dl </option>
<option value="option 279"> 278 mg/dl </option>
<option value="option 280"> 279 mg/dl </option>
<option value="option 281"> 280 mg/dl </option>
<option value="option 282"> 281 mg/dl </option>
<option value="option 283"> 282 mg/dl </option>
<option value="option 284"> 283 mg/dl </option>
<option value="option 285"> 284 mg/dl </option>
<option value="option 286"> 285 mg/dl </option>
<option value="option 287"> 286 mg/dl </option>
<option value="option 288"> 287 mg/dl </option>
<option value="option 289"> 288 mg/dl </option>
<option value="option 290"> 289 mg/dl </option>
<option value="option 291"> 290 mg/dl </option>
<option value="option 292"> 291 mg/dl </option>
<option value="option 293"> 292 mg/dl </option>
<option value="option 294"> 293 mg/dl </option>
<option value="option 295"> 294 mg/dl </option>
<option value="option 296"> 295 mg/dl </option>
<option value="option 297"> 296 mg/dl </option>
<option value="option 298"> 297 mg/dl </option>
<option value="option 299"> 298 mg/dl </option>
<option value="option 300"> 299 mg/dl </option>
<option value="option 301"> 300 mg/dl </option>
<option value="option 302"> 301 mg/dl </option>
<option value="option 303"> 302 mg/dl </option>
<option value="option 304"> 303 mg/dl </option>
<option value="option 305"> 304 mg/dl </option>
<option value="option 306"> 305 mg/dl </option>
<option value="option 307"> 306 mg/dl </option>
<option value="option 308"> 307 mg/dl </option>
<option value="option 309"> 308 mg/dl </option>
<option value="option 310"> 309 mg/dl </option>
<option value="option 311"> 310 mg/dl </option>
<option value="option 312"> 311 mg/dl </option>
<option value="option 313"> 312 mg/dl </option>
<option value="option 314"> 313 mg/dl </option>
<option value="option 315"> 314 mg/dl </option>
<option value="option 316"> 315 mg/dl </option>
<option value="option 317"> 316 mg/dl </option>
<option value="option 318"> 317 mg/dl </option>
<option value="option 319"> 318 mg/dl </option>
<option value="option 320"> 319 mg/dl </option>
<option value="option 321"> 320 mg/dl </option>
<option value="option 322"> 321 mg/dl </option>
<option value="option 323"> 322 mg/dl </option>
<option value="option 324"> 323 mg/dl </option>
<option value="option 325"> 324 mg/dl </option>
<option value="option 326"> 325 mg/dl </option>
<option value="option 327"> 326 mg/dl </option>
<option value="option 328"> 327 mg/dl </option>
<option value="option 329"> 328 mg/dl </option>
<option value="option 330"> 329 mg/dl </option>
<option value="option 331"> 330 mg/dl </option>
<option value="option 332"> 331 mg/dl </option>
<option value="option 333"> 332 mg/dl </option>
<option value="option 334"> 333 mg/dl </option>
<option value="option 335"> 334 mg/dl </option>
<option value="option 336"> 335 mg/dl </option>
<option value="option 337"> 336 mg/dl </option>
<option value="option 338"> 337 mg/dl </option>
<option value="option 339"> 338 mg/dl </option>
<option value="option 340"> 339 mg/dl </option>
<option value="option 341"> 340 mg/dl </option>
<option value="option 342"> 341 mg/dl </option>
<option value="option 343"> 342 mg/dl </option>
<option value="option 344"> 343 mg/dl </option>
<option value="option 345"> 344 mg/dl </option>
<option value="option 346"> 345 mg/dl </option>
<option value="option 347"> 346 mg/dl </option>
<option value="option 348"> 347 mg/dl </option>
<option value="option 349"> 348 mg/dl </option>
<option value="option 350"> 349 mg/dl </option>
<option value="option 351"> 350 mg/dl </option>
<option value="option 352"> 351 mg/dl </option>
<option value="option 353"> 352 mg/dl </option>
<option value="option 354"> 353 mg/dl </option>
<option value="option 355"> 354 mg/dl </option>
<option value="option 356"> 355 mg/dl </option>
<option value="option 357"> 356 mg/dl </option>
<option value="option 358"> 357 mg/dl </option>
<option value="option 359"> 358 mg/dl </option>
<option value="option 360"> 359 mg/dl </option>
<option value="option 361"> 360 mg/dl </option>
<option value="option 362"> 361 mg/dl </option>
<option value="option 363"> 362 mg/dl </option>
<option value="option 364"> 363 mg/dl </option>
<option value="option 365"> 364 mg/dl </option>
<option value="option 366"> 365 mg/dl </option>
<option value="option 367"> 366 mg/dl </option>
<option value="option 368"> 367 mg/dl </option>
<option value="option 369"> 368 mg/dl </option>
<option value="option 370"> 369 mg/dl </option>
<option value="option 371"> 370 mg/dl </option>
<option value="option 372"> 371 mg/dl </option>
<option value="option 373"> 372 mg/dl </option>
<option value="option 374"> 373 mg/dl </option>
<option value="option 375"> 374 mg/dl </option>
<option value="option 376"> 375 mg/dl </option>
<option value="option 377"> 376 mg/dl </option>
<option value="option 378"> 377 mg/dl </option>
<option value="option 379"> 378 mg/dl </option>
<option value="option 380"> 379 mg/dl </option>
<option value="option 381"> 380 mg/dl </option>
<option value="option 382"> 381 mg/dl </option>
<option value="option 383"> 382 mg/dl </option>
<option value="option 384"> 383 mg/dl </option>
<option value="option 385"> 384 mg/dl </option>
<option value="option 386"> 385 mg/dl </option>
<option value="option 387"> 386 mg/dl </option>
<option value="option 388"> 387 mg/dl </option>
<option value="option 389"> 388 mg/dl </option>
<option value="option 390"> 389 mg/dl </option>
<option value="option 391"> 390 mg/dl </option>
<option value="option 392"> 391 mg/dl </option>
<option value="option 393"> 392 mg/dl </option>
<option value="option 394"> 393 mg/dl </option>
<option value="option 395"> 394 mg/dl </option>
<option value="option 396"> 395 mg/dl </option>
<option value="option 397"> 396 mg/dl </option>
<option value="option 398"> 397 mg/dl </option>
<option value="option 399"> 398 mg/dl </option>
<option value="option 400"> 399 mg/dl </option>
<option value="option 401"> 400 mg/dl </option>
<option value="option 402"> 401 mg/dl </option>
<option value="option 403"> 402 mg/dl </option>
<option value="option 404"> 403 mg/dl </option>
<option value="option 405"> 404 mg/dl </option>
<option value="option 406"> 405 mg/dl </option>
<option value="option 407"> 406 mg/dl </option>
<option value="option 408"> 407 mg/dl </option>
<option value="option 409"> 408 mg/dl </option>
<option value="option 410"> 409 mg/dl </option>
<option value="option 411"> 410 mg/dl </option>
<option value="option 412"> 411 mg/dl </option>
<option value="option 413"> 412 mg/dl </option>
<option value="option 414"> 413 mg/dl </option>
<option value="option 415"> 414 mg/dl </option>
<option value="option 416"> 415 mg/dl </option>
<option value="option 417"> 416 mg/dl </option>
<option value="option 418"> 417 mg/dl </option>
<option value="option 419"> 418 mg/dl </option>
<option value="option 420"> 419 mg/dl </option>
<option value="option 421"> 420 mg/dl </option>
<option value="option 422"> 421 mg/dl </option>
<option value="option 423"> 422 mg/dl </option>
<option value="option 424"> 423 mg/dl </option>
<option value="option 425"> 424 mg/dl </option>
<option value="option 426"> 425 mg/dl </option>
<option value="option 427"> 426 mg/dl </option>
<option value="option 428"> 427 mg/dl </option>
<option value="option 429"> 428 mg/dl </option>
<option value="option 430"> 429 mg/dl </option>
<option value="option 431"> 430 mg/dl </option>
<option value="option 432"> 431 mg/dl </option>
<option value="option 433"> 432 mg/dl </option>
<option value="option 434"> 433 mg/dl </option>
<option value="option 435"> 434 mg/dl </option>
<option value="option 436"> 435 mg/dl </option>
<option value="option 437"> 436 mg/dl </option>
<option value="option 438"> 437 mg/dl </option>
<option value="option 439"> 438 mg/dl </option>
<option value="option 440"> 439 mg/dl </option>
<option value="option 441"> 440 mg/dl </option>
<option value="option 442"> 441 mg/dl </option>
<option value="option 443"> 442 mg/dl </option>
<option value="option 444"> 443 mg/dl </option>
<option value="option 445"> 444 mg/dl </option>
<option value="option 446"> 445 mg/dl </option>
<option value="option 447"> 446 mg/dl </option>
<option value="option 448"> 447 mg/dl </option>
<option value="option 449"> 448 mg/dl </option>
<option value="option 450"> 449 mg/dl </option>
<option value="option 451"> 450 mg/dl </option>
<option value="option 452"> 451 mg/dl </option>
<option value="option 453"> 452 mg/dl </option>
<option value="option 454"> 453 mg/dl </option>
<option value="option 455"> 454 mg/dl </option>
<option value="option 456"> 455 mg/dl </option>
<option value="option 457"> 456 mg/dl </option>
<option value="option 458"> 457 mg/dl </option>
<option value="option 459"> 458 mg/dl </option>
<option value="option 460"> 459 mg/dl </option>
<option value="option 461"> 460 mg/dl </option>
<option value="option 462"> 461 mg/dl </option>
<option value="option 463"> 462 mg/dl </option>
<option value="option 464"> 463 mg/dl </option>
<option value="option 465"> 464 mg/dl </option>
<option value="option 466"> 465 mg/dl </option>
<option value="option 467"> 466 mg/dl </option>
<option value="option 468"> 467 mg/dl </option>
<option value="option 469"> 468 mg/dl </option>
<option value="option 470"> 469 mg/dl </option>
<option value="option 471"> 470 mg/dl </option>
<option value="option 472"> 471 mg/dl </option>
<option value="option 473"> 472 mg/dl </option>
<option value="option 474"> 473 mg/dl </option>
<option value="option 475"> 474 mg/dl </option>
<option value="option 476"> 475 mg/dl </option>
<option value="option 477"> 476 mg/dl </option>
<option value="option 478"> 477 mg/dl </option>
<option value="option 479"> 478 mg/dl </option>
<option value="option 480"> 479 mg/dl </option>
<option value="option 481"> 480 mg/dl </option>
<option value="option 482"> 481 mg/dl </option>
<option value="option 483"> 482 mg/dl </option>
<option value="option 484"> 483 mg/dl </option>
<option value="option 485"> 484 mg/dl </option>
<option value="option 486"> 485 mg/dl </option>
<option value="option 487"> 486 mg/dl </option>
<option value="option 488"> 487 mg/dl </option>
<option value="option 489"> 488 mg/dl </option>
<option value="option 490"> 489 mg/dl </option>
<option value="option 491"> 490 mg/dl </option>
<option value="option 492"> 491 mg/dl </option>
<option value="option 493"> 492 mg/dl </option>
<option value="option 494"> 493 mg/dl </option>
<option value="option 495"> 494 mg/dl </option>
<option value="option 496"> 495 mg/dl </option>
<option value="option 497"> 496 mg/dl </option>
<option value="option 498"> 497 mg/dl </option>
<option value="option 499"> 498 mg/dl </option>
<option value="option 500"> 499 mg/dl </option>
<option value="option 501"> 500 mg/dl </option>
          </select>
        </div>
     <input type="submit" button data-icon="forward" data-iconpos="right" onsubmit="return validateFormSugar()" method="post">DONE</button>
      </form>
      </div>
	<div data-role="footer">
		<h4>Vierge&#8482; Mobile Health</h4>
	</div>
    </div>
</div>

<div data-role="page" id="bloodpressure">
    <div data-role="header">
		<script type="text/javascript">
        var x="systolic_slider"
		var y="diastolic_slider"
        </script>
        <h1>Blood Pressure Check</h1>
	</div>
	<div data-role="content">
    <div data-role="fieldcontain" id="bpcheck">
     <form name="bpForm"  action="form-process.php" onsubmit="return validateForm()" method="post">
        <label for="textinput" name="systolic_slider" value"0"><strong>Systolic Number:</strong><br>(Top Number)</label>
        <input type="text" name="systolic_slider" id="systolic_slider" value="0" min="0" max="200" />
        <label for="textinput" name="diastolic_slider" value"0"><strong>Diastolic Number:</strong><br>(Bottom Number)</label>
        <input type="text" name="diastolic_slider" id="diastolic_slider" value="0" min="0" max="200" />
      <input type="submit" button data-icon="forward" data-iconpos="right" onsubmit="return validateForm()" method="Submit">DONE</button>
      </form>
      </div> <!-- end modified form -->
    
	<div data-role="footer">
		<h4>Vierge&#8482; Mobile Health</h4>
	</div>
</div></div>

<!-- BEGIN WELLNESS PAGE -->
<div data-role="page" id="wellness">
	<div data-role="header">
		<h1>Wellness Coach</h1>
	</div>
	<div data-role="content">
      <div data-role="fieldcontain">
        <ul data-role="listview" data-split-icon="arrow-r">
          <li><a href="#fooddiary">Food Diary</a><a href="#">Food Diary</a></li>
          <li><a href="#workout">Workout</a><a href="#">Workout</a></li>
          <li><a href="#coach">See Coach</a><a href="#">See Coach</a></li>
          <li><a href="#appointments">Set Appointments</a><a href="#">Set Appointments</a></li>
        </ul>
       
      </div>
    </div>
	<div data-role="footer">
		<h4>Vierge&#8482; Mobile Health</h4>
	</div>
</div>
<div data-role="page" id="fooddiary">
<link rel="stylesheet" href="jquery.ui.datepicker.mobile.css" type="text/css"/> 
  <script src="http://www.makadestudios.com/vierge/jQuery.ui.datepicker.js"></script>
  <script src="http://www.makadestudios.com/vierge/jquery.ui.datepicker.mobile.js"></script>
  <div data-role="header">
    <h1>Food Diary</h1>
  </div>
  <div data-role="fieldcontain">
<label for="date">Date:</label>
<input type="date" name="date" id="date" value=""  />
  </div>
  <div data-role="fieldcontain">
 <div data-role="collapsible-set">
    <div data-role="collapsible">
      <h3>Breakfast</h3>
      <p><label for="selectmenu" class="select"></label>
    <select name="selectmenu" id="breakfastdrink">
      <option value="option1">Drink</option>
      <option value="option2">None</option>
      <option value="option3">Water</option>
      <option value="option4">Coffee</option>
      <option value="option5">Soda</option>
      <option value="option6">Milk</option>
      <option value="option7">Juice</option>
      <option value="option8">Alcohol</option>
    </select></p>

      <p><label for="selectmenu" class="select"></label>
    <select name="selectmenu" id="breakfastmeal">
      <option value="option1">Main Meal</option>
      <option value="option2">Beef</option>
      <option value="option3">Chicken</option>
      <option value="option4">Pork</option>
      <option value="option5">Milk</option>
      <option value="option6">Juice</option>
      <option value="option7">Alcohol</option>
    </select></p>
    </div>
    <div data-role="collapsible" data-collapsed="true">
      <h3>Lunch</h3>
      <p><label for="selectmenu" class="select"></label>
    <select name="selectmenu" id="lunchdrink">
      <option value="option1">Drink</option>
      <option value="option2">None</option>
      <option value="option3">Water</option>
      <option value="option4">Coffee</option>
      <option value="option5">Soda</option>
      <option value="option6">Milk</option>
      <option value="option7">Juice</option>
      <option value="option8">Alcohol</option>
    </select></p>
    </div>
    <div data-role="collapsible" data-collapsed="true">
      <h3>Dinner</h3>
      <p><label for="selectmenu" class="select"></label>
    <select name="selectmenu" id="dinnerdrink">
      <option value="option1">Drink</option>
      <option value="option2">None</option>
      <option value="option3">Water</option>
      <option value="option4">Coffee</option>
      <option value="option5">Soda</option>
      <option value="option6">Milk</option>
      <option value="option7">Juice</option>
      <option value="option8">Alcohol</option>
    </select></p>
    </div>
        <div data-role="collapsible" data-collapsed="true">
      <h3>Snacks</h3>
      <p><label for="selectmenu" class="select"></label>
    <select name="selectmenu" id="snackdrink">
      <option value="option1">Drink</option>
      <option value="option2">None</option>
      <option value="option3">Water</option>
      <option value="option4">Coffee</option>
      <option value="option5">Soda</option>
      <option value="option6">Milk</option>
      <option value="option7">Juice</option>
      <option value="option8">Alcohol</option>
    </select></p>
    </div>
  </div>
  </div>
<div data-role="footer">
    <h4>Vierge&#8482; Mobile Health</h4>
  </div>
</div>
<div data-role="page" id="appointment">
  <div data-role="header">
    <h1>Apointment Reminder</h1>
  </div>
  <div data-role="content">Content</div>
  <div data-role="footer">
    <h4>Vierge&#8482; Mobile Health</h4>
  </div>
</div>
<div data-role="page" id="symptoms">
  <div data-role="header">
    <h1>How Are You Feeling?</h1>
  </div>
  <div data-role="content">Content</div>
  <div data-role="footer">
    <h4>Vierge&#8482; Mobile Health</h4>
  </div>
</div>
<div data-role="page" id="history">
  <div data-role="header">
    <h1>Review Health History</h1>
  </div>
  <div data-role="content">Content</div>
  <div data-role="footer">
    <h4>Vierge&#8482; Mobile Health</h4>
  </div>
</div>
</body>
</html>
