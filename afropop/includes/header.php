<?php $page = basename($_SERVER['SCRIPT_NAME']); ?> 

<header>
  <div id="logo">
    <h1>Afropop</h1>
    <ul>
    <li class="utilities"><a href="javascript:;" onclick="MM_openBrWindow('contact.php','contact','scrollbars=yes,width=500px,height=500px')" >
    <img class="contact" src="images/contact.png" alt="contact">
   </a>
   </li>
    </ul>
  </div>
  <!--end logo--> 
  
</header>
<nav>
  <ul>
    <li class="nav<?php if ($page == 'index.php') { print '-on'; } ?>"><a href="index.php">Home</a></li>
    <li class="nav<?php if ($page == 'congo.php') { print '-on'; } ?>"><a href="congo.php">Congo</a></li>
    <li class="nav<?php if ($page == 'ghana.php') { print '-on'; } ?>"><a href="ghana.php">Ghana</a></li>
    <li class="nav<?php if ($page == 'nigeria.php') { print '-on'; } ?>"><a href="nigeria.php">Nigeria</a></li>
    <li class="nav<?php if ($page == 'ivory-coast.php') { print '-on'; } ?>"><a href="ivory-coast.php">Ivory Coast</a></li>
  </ul>
</nav>