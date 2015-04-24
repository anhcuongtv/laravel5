<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat">
<!--  start nav-outer -->
<div class="nav-outer">

		<!-- start nav-right -->
		<div id="nav-right">

			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account">{!! HTML::image('images/backend/shared/nav/nav_myaccount.gif','',array('width'=>93,'height'=>14)) !!}</div>
			<div class="nav-divider">&nbsp;</div>
			<a href="{{ url('/admin/logout') }}" id="logout">{!! HTML::image('images/backend/shared/nav/nav_logout.gif','',array('width'=>64,'height'=>14)) !!}</a>
			<div class="clear">&nbsp;</div>

			<!--  start account-content
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="" id="acc-settings">Settings</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-details">Personal details </a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-project">Project details</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-inbox">Inbox</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-stats">Statistics</a>
			</div>
			</div>
			<!--  end account-content -->

		</div>
		<!-- end nav-right -->

		<!--  start nav -->
		<div class="nav">
		<div class="table">

        <ul class="select"><li><a href="#nogo"><b>User Management</b><!--[if IE 7]><!--></a><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
        <div class="select_sub">
            <ul class="sub">
                <li><a href="{{ url('/admin') }}">All Users</a></li>
                <li><a href="{{ url('/admin/user/add') }}">Add User</a></li>
            </ul>
        </div>
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        </ul>

        <div class="nav-divider">&nbsp;</div>

        <ul class="select"><li><a href="#nogo"><b>Roles Management</b><!--[if IE 7]><!--></a><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
        <div class="select_sub">
            <ul class="sub">
                <li><a href="{{ url('/admin/role') }}">Role</a></li>
                <li><a href="{{ url('/admin/permission') }}">Permission</a></li>
            </ul>
        </div>
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        </ul>


		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>