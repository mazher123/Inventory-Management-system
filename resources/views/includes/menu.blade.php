
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>



     @if(session('role')=='admin')
     <li>
         <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
     </li>
                        <li>
                            <a href="#"><i class="fa fa-building-o fa-fw"></i> Data Entry<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('DataEntryAdmin.add')}}"><i class="fa fa-plus-circle fa-fw"></i> Add employee</a>
                                </li>
                                <li>
                                    <a href="{{route('DataEntryAdmin.view')}}"><i class="fa fa-edit fa-fw"></i> Manage employee</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-truck fa-fw"></i> Operator<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('OperatorAdmin.add')}}"><i class="fa fa-plus-circle fa-fw"></i> Add operator</a>
                                </li>
                                <li>
                                    <a href="{{route('OperatorAdmin.view')}}"><i class="fa fa-edit fa-fw"></i> Manage operator</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> login Permission<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('Role.add')}}"><i class="fa fa-plus-circle fa-fw"></i> Permit Data Employees</a>
                                </li>
                                <li>
                                    <a href="{{route('Role.operator')}}"><i class="fa fa-edit fa-fw"></i> Permit operator Employees</a>
                                </li>
                            </ul>
                        </li>




                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Stock Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('createStock')}}"><i class="fa fa-plus-circle fa-fw"></i> create new stock </a>
                                </li>
                                <li>
                                    <a href="{{route('managestock')}}"><i class="fa fa-plus-circle fa-fw"></i>Manage stock </a>
                                </li>
                                <li>
                                    <a href="{{route('damangeStock')}}"><i class="fa fa-plus-circle fa-fw"></i>Damage stock </a>
                                </li>

                                <li>
                                    <a href="{{route('currentStock')}}"><i class="fa fa-plus-circle fa-fw"></i>Current stock </a>
                                </li>
                                <li>
                                    <a href="{{route('addvendor')}}"><i class="fa fa-plus-circle fa-fw"></i> Add Vendor </a>
                                </li>
                            </ul>
                        </li>

   @elseif(session('role')=='dataentry')

   <li>
       <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
   </li>
   <li>
       <a href="#"><i class="fa fa-hand-paper-o fa-fw"></i> Products<span class="fa arrow"></span></a>
       <ul class="nav nav-second-level">
           <li>
               <a href="{{route('addproduct')}}"><i class="fa fa-plus-circle fa-fw"></i> Add product</a>
           </li>
           <li>
               <a href="{{route('viewProduct')}}"><i class="fa fa-edit fa-fw"></i>View product</a>
           </li>
       </ul>
       <!-- /.nav-second-level -->
   </li>

   <li>
       <a href="#"><i class="fa fa-hand-paper-o fa-fw"></i> Catagory<span class="fa arrow"></span></a>
       <ul class="nav nav-second-level">
           <li>
               <a href="{{route('addcatagory')}}"><i class="fa fa-plus-circle fa-fw"></i> Add category</a>
           </li>
           <!-- <li>
               <a href=""><i class="fa fa-edit fa-fw"></i> Edit Catagory</a>
           </li> -->
       </ul>
       <!-- /.nav-second-level -->
   </li>

 @elseif(session('role')=='operator')

 <li>
     <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
 </li>

 <li>
     <a href="#"><i class="fa fa-hand-paper-o fa-fw"></i> generate bills<span class="fa arrow"></span></a>
     <ul class="nav nav-second-level">
         <li>
             <a href=""><i class="fa fa-plus-circle fa-fw"></i> manual billing</a>
         </li>
         <li>
             <a href=""><i class="fa fa-edit fa-fw"></i> show available Products</a>
         </li>
     </ul>
     <!-- /.nav-second-level -->
 </li>

   @endif


                    </ul><br>
                    <style>
            .buttonkuks{
                    background-color: #4CAF50; /* Green */
                    border: none;
                    color: white;
                    padding: 16px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    -webkit-transition-duration: 0.4s; /* Safari */
                    transition-duration: 0.4s;
                    cursor: pointer;
                }
                .button1kuk {
                    background-color: white;
                    color: green;
                    border: 2px solid #4CAF50;
                }

                .button1kuk:hover {

                    background-color: #4CAF50;
                    color: white;
                }
                .button3kuk {
                    background-color: white;
                    color: #F0AD4E;
                    border: 2px solid #F0AD4E;
                }

                .button3kuk:hover {

                    background-color: #F0AD4E;
                    color: white;
}

                </style>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
