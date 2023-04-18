        <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php?Home=home"><i class="fa fa-home fa-fw"><span class="hover"></i> Home</a>
                    </li>
                    <li>
                        <a href="index.php?page=categories&io=1"><i class="fa fa-book fa-fw"></i> Browse Categories</a>
                    </li>
                    <li class=''>
                        <a href="index.php?page=employee&io=1"><i class="fa fa-fw fa-users"></i> Employee List</a>
                    </li>
                    <li>
                        <a href="index.php?page=project_list&io=1"><i class="fa fa-fw fa-files-o"></i> Suggest a Project</a>
                    </li>
                <?php if($_SESSION['TYPE'] == 1): ?>
                    <li class=''>
                    <a href="index.php?page=user_list&io=1"><i class="fa fa-users"></i> Users</a>
                    </li>
                <?php endif; ?>    
                    <li>
                        <a id="dem3" href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-gears"></i> Maintenance       <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                        
                           <li>
                                <a href="index.php?page=position"><i class="fa fa-fw fa-file-o"></i>Position</a>
                            </li>
                             <li>
                                <a href="index.php?page=division"><i class="fa fa-fw fa-file-o"></i>Project Divisions</a>
                            </li>
                            <li style="">
                                <a href="index.php?page=project_team"><i class="fa fa-fw fa-users"></i>Project Team</a>
                            </li>
                        </ul>
                    </li>
    </ul>
<script>
    var _h = location.href  
        $('.side-nav a').each(function(){
            if(_h.includes($(this).attr("href")) == true){
                $(this).closest('li').addClass('active')
            }
        })
</script>

