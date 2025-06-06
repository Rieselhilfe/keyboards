<?php
  $pagename = 'Yupik Cyrillic (SIL) Keyboard Help';
$pagetitle = $pagename;
$pagestyle = <<<END
        .key { 
            float: left;
            display: block; 
            position: relative;
            overflow: hidden;
            height: 35px;
            
                margin: 2px 0px 0px 4px;
              
        }
        
        #K_SPACE {
          width: 234px; 
          
            background-image: url('key-space.gif'); 
          
        }

        #K_BKSLASH {
          width: 42px; 
          
            background-image: url('key-bkslash.gif'); 
          
        }
        
        #K_oE2 {
          
            display:none;
          
        }
        
        #K_SHIFTL {
          width: 80px;background-image: url('key-shiftl.gif');
        }
        
        .plain {
          
            background-image: url('key-plain.gif');
          
          background-repeat: no-repeat;
          width: 34px;
        }
        
        .special {
          background-repeat: no-repeat;
          
        }
        
        .keycap {
          font: bold 7pt Arial; 
          position: absolute; 
          left: 4px; 
          top: 3px;
        }
        
        .key .keycap {          
          display: block;
        }
        
        .special .keycap {
          display: block;
        }
        
        .keytext {
          
					font:
						10pt
							 
						"Times New Roman"; 
          position: absolute; 
          display: block;
          right: 2px;
          bottom: 4px;
          color: blue;
        }
END;
require_once('header.php');
?>

<h2>Font</h2>

<p>No fonts are included with this keyboard package. The keyboard can be used with any font that supports the Unicode U+0400..U+04FF block of the Cyrillic script. In addition, a combining marcron is used over some of the vowels.</p>

<h2>Keyboard</h2>

<p>SIL's Yupik Cyrillic keyboard has been designed for typing the Central Siberian Yupik language in the Cyrillic script (ess-Cyrl). It is based on the layout of an earlier keyboard which had been implemented in the legacy encoding introduced into the SIL language project around 1990, but now implements that layout in Unicode.</p>

<h3>Notes:</h3>

<p style="margin-bottom: 0.5em;"><em>1. In the charts below, when a keycap is displayed with two Cyrillic characters separated by a slash, press the key once to produce the first character, or twice to produce the second character. For example, pressing</em></p>

<div style="width: 60px; display: block; float: left;">&#x00A0</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
<div class="keytext">&#x044F/&#x044F&#x0304</div>
</div>

<p style="margin-top: 3.5em;"><em>once will output &#x201c&#x044f&#x201d, pressing it a second time will replace the &#x201c&#x044f&#x201d with &#x201c&#x044f&#x0304&#x201d.
</em></p>

<p style='margin: 0 0 0 0'><em>2. The original character assigned to a remapped key can be produced by typing a &#x201c+&#x201d in front of it. For example, Pressing the <span style="color:red;font-weight:bold">;</span> key will produce Cyrillic &#x201c&#x044c&#x201d as shown in the "Unshifted" chart below. But pressing the sequence <span style="color:red;font-weight:bold">+;</span> will produce &#x201c&#x003B&#x201d.
</em></p>


<h3 style="clear:left">Unshifted</h3>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">&#x0451</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">1</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">2</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">3</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">4</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">5</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">6</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">7</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">8</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">9</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">0</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">-</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">=</div>
</div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-backspace.gif');
          ">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 52px;
        
          background-image: url('key-tab.gif');
          ">
<div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
<div class="keytext">&#x044F/&#x044F&#x0304</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">&#x0448</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">&#x0435</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">&#x0440</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">&#x0442</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">&#x044b</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">&#x0443/&#x04ef</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">&#x0438/&#x04e3</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">&#x043e</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">&#x043f</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">&#x044e/&#x044e&#x0304</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">&#x0449</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">\</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">&#x0430/&#x0430&#x0304</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">&#x0441</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">&#x0434</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">&#x0444</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">&#x0433/&#x04f7</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">&#x0447</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">&#x0439</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">&#x043a/&#x049b</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">&#x043b</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">&#x044c</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">&#x0436</div>
</div>
<div class="key special" id="" style="
        width: 70px;
        
          background-image: url('key-enter.gif');
          ">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="
        width: px;
        ">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">&#x0437</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">&#x0445/&#x04b3</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">&#x0446</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">&#x0432</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">&#x0431/&#x044a</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">&#x043d/&#x04a3</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">&#x043c</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">,</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">.</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">&#x044d</div>
</div>
<div class="key special" id="" style="
        width: 90px;
        
          background-image: url('key-shiftr.gif');
          ">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrll.gif');
          ">
<div class="keycap">Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;">&#x00A0</div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altl.gif');
          ">
<div class="keycap">Alt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altr.gif');
          ">
<div class="keycap">Alt</div>
</div>
<div style="width: 54px; display: block; float: left;">&#x00A0</div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrlr.gif');
          ">
<div class="keycap">Ctrl</div>
</div><br style="clear: left"><h3 style="clear:left">Shift</h3>
<div class="key plain" id="K_BKQUOTE">
<div class="keycap">`</div>
<div class="keytext">&#x0401</div>
</div>
<div class="key plain" id="K_1">
<div class="keycap">1</div>
<div class="keytext">!</div>
</div>
<div class="key plain" id="K_2">
<div class="keycap">2</div>
<div class="keytext">@</div>
</div>
<div class="key plain" id="K_3">
<div class="keycap">3</div>
<div class="keytext">#</div>
</div>
<div class="key plain" id="K_4">
<div class="keycap">4</div>
<div class="keytext">$</div>
</div>
<div class="key plain" id="K_5">
<div class="keycap">5</div>
<div class="keytext">%</div>
</div>
<div class="key plain" id="K_6">
<div class="keycap">6</div>
<div class="keytext">^</div>
</div>
<div class="key plain" id="K_7">
<div class="keycap">7</div>
<div class="keytext">&amp;</div>
</div>
<div class="key plain" id="K_8">
<div class="keycap">8</div>
<div class="keytext">*</div>
</div>
<div class="key plain" id="K_9">
<div class="keycap">9</div>
<div class="keytext">(</div>
</div>
<div class="key plain" id="K_0">
<div class="keycap">0</div>
<div class="keytext">)</div>
</div>
<div class="key plain" id="K_HYPHEN">
<div class="keycap">-</div>
<div class="keytext">_</div>
</div>
<div class="key plain" id="K_EQUAL">
<div class="keycap">=</div>
<div class="keytext">+</div>
</div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-backspace.gif');
          ">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 52px;
        
          background-image: url('key-tab.gif');
          ">
<div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
<div class="keycap">Q</div>
<div class="keytext">&#x042f/&#x042f&#x0304</div>
</div>
<div class="key plain" id="K_W">
<div class="keycap">W</div>
<div class="keytext">&#x0428</div>
</div>
<div class="key plain" id="K_E">
<div class="keycap">E</div>
<div class="keytext">&#x0415</div>
</div>
<div class="key plain" id="K_R">
<div class="keycap">R</div>
<div class="keytext">&#x0420</div>
</div>
<div class="key plain" id="K_T">
<div class="keycap">T</div>
<div class="keytext">&#x0422</div>
</div>
<div class="key plain" id="K_Y">
<div class="keycap">Y</div>
<div class="keytext">&#x042b</div>
</div>
<div class="key plain" id="K_U">
<div class="keycap">U</div>
<div class="keytext">&#x0423/&#x04ee</div>
</div>
<div class="key plain" id="K_I">
<div class="keycap">I</div>
<div class="keytext">&#x0418/&#x04e2</div>
</div>
<div class="key plain" id="K_O">
<div class="keycap">O</div>
<div class="keytext">&#x041e</div>
</div>
<div class="key plain" id="K_P">
<div class="keycap">P</div>
<div class="keytext">&#x041f</div>
</div>
<div class="key plain" id="K_LBRKT">
<div class="keycap">[</div>
<div class="keytext">&#x042e/&#x042e&#x0304</div>
</div>
<div class="key plain" id="K_RBRKT">
<div class="keycap">]</div>
<div class="keytext">&#x0429</div>
</div>
<div class="key plain" id="K_BKSLASH">
<div class="keycap">\</div>
<div class="keytext">|</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
<div class="keycap">A</div>
<div class="keytext">&#x0410/&#x0410&#x0304</div>
</div>
<div class="key plain" id="K_S">
<div class="keycap">S</div>
<div class="keytext">&#x0421</div>
</div>
<div class="key plain" id="K_D">
<div class="keycap">D</div>
<div class="keytext">&#x0414</div>
</div>
<div class="key plain" id="K_F">
<div class="keycap">F</div>
<div class="keytext">&#x0424</div>
</div>
<div class="key plain" id="K_G">
<div class="keycap">G</div>
<div class="keytext">&#x0413/&#x04f6</div>
</div>
<div class="key plain" id="K_H">
<div class="keycap">H</div>
<div class="keytext">&#x0427</div>
</div>
<div class="key plain" id="K_J">
<div class="keycap">J</div>
<div class="keytext">&#x0419</div>
</div>
<div class="key plain" id="K_K">
<div class="keycap">K</div>
<div class="keytext">&#x041a/&#x049a</div>
</div>
<div class="key plain" id="K_L">
<div class="keycap">L</div>
<div class="keytext">&#x041b</div>
</div>
<div class="key plain" id="K_COLON">
<div class="keycap">;</div>
<div class="keytext">&#x042c</div>
</div>
<div class="key plain" id="K_QUOTE">
<div class="keycap">'</div>
<div class="keytext">&#x0416</div>
</div>
<div class="key special" id="" style="
        width: 70px;
        
          background-image: url('key-enter.gif');
          ">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="
        width: px;
        ">
<div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_oE2">
<div class="keycap">\</div>
</div>
<div class="key plain" id="K_Z">
<div class="keycap">Z</div>
<div class="keytext">&#x0417</div>
</div>
<div class="key plain" id="K_X">
<div class="keycap">X</div>
<div class="keytext">&#x0425/&#x04b2</div>
</div>
<div class="key plain" id="K_C">
<div class="keycap">C</div>
<div class="keytext">&#x0426</div>
</div>
<div class="key plain" id="K_V">
<div class="keycap">V</div>
<div class="keytext">&#x0412</div>
</div>
<div class="key plain" id="K_B">
<div class="keycap">B</div>
<div class="keytext">&#x0411/&#x042a</div>
</div>
<div class="key plain" id="K_N">
<div class="keycap">N</div>
<div class="keytext">&#x041d/&#x04a2</div>
</div>
<div class="key plain" id="K_M">
<div class="keycap">M</div>
<div class="keytext">&#x041c</div>
</div>
<div class="key plain" id="K_COMMA">
<div class="keycap">,</div>
<div class="keytext">&lt;</div>
</div>
<div class="key plain" id="K_PERIOD">
<div class="keycap">.</div>
<div class="keytext">&gt;</div>
</div>
<div class="key plain" id="K_SLASH">
<div class="keycap">/</div>
<div class="keytext">&#x042d</div>
</div>
<div class="key special" id="" style="
        width: 90px;
        
          background-image: url('key-shiftr.gif');
          ">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrll.gif');
          ">
<div class="keycap">Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;">&#x00a0</div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altl.gif');
          ">
<div class="keycap">Alt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altr.gif');
          ">
<div class="keycap">Alt</div>
</div>
<div style="width: 54px; display: block; float: left;">&#x00a0</div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrlr.gif');
          ">
<div class="keycap">Ctrl</div>
</div><br style="clear: left">

<h3>Other characters requiring multiple keystrokes</h3>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=300
 style='width:324pt;border-collapse:collapse;border:none'>
 <thead>
  <tr>
   <td width=216 valign=bottom style='width:216pt;border:solid windowtext 2.25pt;
   border-right:none;padding:0pt 0pt 0in 0pt'>
   <p class=MsoNormal align=center style='text-align:center;page-break-after:
   avoid;margin: 3pt 0 2pt 0'><b><span  style='font-size:10.0pt;font-family:"Arial Narrow"'>Character Name</span></b></p>
   </td>
   <td width=54 valign=bottom style='width:54pt;border-top:solid windowtext 2.25pt;
   border-left:none;border-right:none;border-bottom:solid windowtext 2.25pt;padding:0pt 0pt 0in 0pt'>
   <p class=MsoNormal align=center style='text-align:center;page-break-after:
   avoid;margin: 3pt 0 2pt 0'><b><span style='font-size:10.0pt;font-family:"Arial Narrow"'>Character</span></b></p>
   </td>
   <td width=54 valign=bottom style='width:54pt;border:solid windowtext 2.25pt;
   border-left:none;padding:0pt 0pt 0in 0pt'>
   <p class=MsoNormal align=center style='text-align:center;page-break-after:
   avoid;margin: 3pt 0 2pt 0'><b><span  style='font-size:10.0pt;font-family:"Arial Narrow"'>Keystrokes</span></b></p>
   </td>
  </tr>
 </thead>
 
 <tr>
  <td width=216 valign=center style='width:216pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center style='page-break-after:avoid;margin: 3pt 0 2pt 0'><span 
  style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica'>CYRILLIC SMALL LETTER SHORT U</span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center style='color:blue;text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span class=CharacterCode2000><span 
  style='font-size:12.0pt;font-family:"Times New Roman";font-weight:normal'>&#x045E;</span></span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span
   style='font-size:12.0pt;font-family:"Arial"'>,u</span></p>
  </td>
   </tr>
 
 <tr>
  <td width=216 valign=center style='width:216pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center style='page-break-after:avoid;margin: 3pt 0 2pt 0'><span 
  style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica'>CYRILLIC CAPITAL LETTER SHORT U</span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center style='color:blue;text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span class=CharacterCode2000><span 
  style='font-size:12.0pt;font-family:"Times New Roman;font-weight:normal'>&#x040E;</span></span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span
   style='font-size:12.0pt;font-family:"Arial"'>,U</span></p>
  </td>
   </tr>

 <tr>
  <td width=216 valign=center style='width:216pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center style='page-break-after:avoid;margin: 3pt 0 2pt 0'><span 
  style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica'>LEFT SINGLE QUOTATION MARK</span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center style='color:blue;text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span class=CharacterCode2000><span 
  style='font-size:12.0pt;font-family:"Times New Roman";font-weight:normal'>&#x2018;</span></span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span
   style='font-size:12.0pt;font-family:"Arial"'>(-</span></p>
  </td>
   </tr>

 <tr>
  <td width=216 valign=center style='width:216pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center style='page-break-after:avoid;margin: 3pt 0 2pt 0'><span 
  style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica'>RIGHT SINGLE QUOTATION MARK</span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center style='color:blue;text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span class=CharacterCode2000><span 
  style='font-size:12.0pt;font-family:"Times New Roman";font-weight:normal'>&#x2019;</span></span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span
   style='font-size:12.0pt;font-family:"Arial"'>-)</span></p>
  </td>
   </tr>

 <tr>
  <td width=216 valign=center style='width:216pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center style='page-break-after:avoid;margin: 3pt 0 2pt 0'><span 
  style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica'>LEFT DOUBLE QUOTATION MARK</span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center style='color:blue;text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span class=CharacterCode2000><span 
  style='font-size:12.0pt;font-family:"Times New Roman";font-weight:normal'>&#x201C;</span></span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span
   style='font-size:12.0pt;font-family:"Arial"'>(=</span></p>
  </td>
   </tr>

 <tr>
  <td width=216 valign=center style='width:216pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center style='page-break-after:avoid;margin: 3pt 0 2pt 0'><span 
  style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica'>RIGHT DOUBLE QUOTATION MARK</span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center style='color:blue;text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span class=CharacterCode2000><span 
  style='font-size:12.0pt;font-family:"Times New Roman";font-weight:normal'>&#x201D;</span></span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span
   style='font-size:12.0pt;font-family:"Arial"'>=)</span></p>
  </td>
   </tr>

 <tr>
  <td width=216 valign=center style='width:216pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center style='page-break-after:avoid;margin: 3pt 0 2pt 0'><span 
  style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica'>SINGLE LEFT-POINTING ANGLE QUOTATION MARK</span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center style='color:blue;text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span class=CharacterCode2000><span 
  style='font-size:12.0pt;font-family:"Times New Roman";font-weight:normal'>&#x2039;</span></span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span
   style='font-size:12.0pt;font-family:"Arial"'>&#x003C-</span></p>
  </td>
   </tr>

 <tr>
  <td width=216 valign=center style='width:216pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center style='page-break-after:avoid;margin: 3pt 0 2pt 0'><span 
  style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica'>SINGLE RIGHT-POINTING ANGLE QUOTATION MARK</span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center style='color:blue;text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span class=CharacterCode2000><span 
  style='font-size:12.0pt;font-family:"Times New Roman";font-weight:normal'>&#x203A;</span></span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span
   style='font-size:12.0pt;font-family:"Arial"'>-&#x003E</span></p>
  </td>
   </tr>

 <tr>
  <td width=216 valign=center style='width:216pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center style='page-break-after:avoid;margin: 3pt 0 2pt 0'><span 
  style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica'>LEFT-POINTING DOUBLE ANGLE QUOTATION MARK</span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center style='color:blue;text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span class=CharacterCode2000><span 
  style='font-size:12.0pt;font-family:"Times New Roman";font-weight:normal'>&#x00AB;</span></span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span
   style='font-size:12.0pt;font-family:"Arial"'>&#x003C=</span></p>
  </td>
   </tr>

 <tr>
  <td width=216 valign=center style='width:216pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center style='page-break-after:avoid;margin: 3pt 0 2pt 0'><span 
  style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica'>RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK</span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center style='color:blue;text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span class=CharacterCode2000><span 
  style='font-size:12.0pt;font-family:"Times New Roman";font-weight:normal'>&#x00BB;</span></span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span
   style='font-size:12.0pt;font-family:"Arial"'>=&#x003E</span></p>
  </td>
   </tr>

 <tr>
  <td width=216 valign=center style='width:216pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=center style='page-break-after:avoid;margin: 3pt 0 2pt 0'><span 
  style='font-size:10.0pt;font-family:Verdana, Arial, Helvetica'>COPYRIGHT SIGN</span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0pt 0pt 0in 0ptt'>
  <p class=MsoNormal align=center style='color:blue;text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span class=CharacterCode2000><span 
  style='font-size:12.0pt;font-family:"Times New Roman";font-weight:normal'>&#x00A9;</span></span></p>
  </td>
  <td width=54 valign=center style='width:54pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0pt 0pt 0in 0pt'>
  <p class=MsoNormal align=left style='text-align:center;page-break-after:avoid;margin: 3pt 0 2pt 0'><span
   style='font-size:12.0pt;font-family:"Arial"'>(c)</span></p>
  </td>
   </tr>

</table>
