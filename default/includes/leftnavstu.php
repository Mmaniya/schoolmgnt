<nav class="pcoded-navbar">
<div class="pcoded-inner-navbar main-menu">
    <div class="pcoded-navigatio-lavel">Navigation</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu active pcoded-trigger">
            <a href="studenthome.php?myid=<?php echo $staffid; ?>">
                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                <span class="pcoded-mtext">Dashboard</span>
            </a>
            
        </li>
        
    </ul>
    <div class="pcoded-navigatio-lavel">Profile</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="stuprofile.php?myid=<?php echo $staffid; ?>">
                <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                <span class="pcoded-mtext">My Profile</span>
            </a>
            
        </li>
        <li class="pcoded-hasmenu">
            <a href="stuupdateprofile.php?myid=<?php echo $staffid; ?>">
                <span class="pcoded-micon"><i class="feather icon-gitlab"></i></span>
                <span class="pcoded-mtext">Update Profile</span>
            </a>
            
        </li>
        
        
    </ul>
    <div class="pcoded-navigatio-lavel">Search</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="stusearch.php?myid=<?php echo $staffid; ?>">
                <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                <span class="pcoded-mtext">Search School</span>
            </a>
            
        </li>
        <li class=" ">
            <a href="stuapply.php?myid=<?php echo $staffid; ?>">
                <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                <span class="pcoded-mtext">View School</span>
            </a>
        </li>

    </ul>

</div>
</nav>