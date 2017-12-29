<ul>
<li> <a href="index2.php?rt=<?php echo $uname?>"><span>Home</span></a></li>
<li class='has-sub'><a><span>Section</span></a>
<ul>
<li> <a href="student.php?rt=<?php echo $uname?>"><span>Student</span></a></li>
<li><a href="teacher.php?rt=<?php echo $uname?>"><span>Teacher</span></a></li>
</ul>
</li>
<li class='has-sub '><a><span>View Report</span></a>
<ul>
<li><a href="report.php?rt=<?php echo $uname?>&&rty=d"><span>Daily</span></a></li>
<li><a href='report.php?rt=<?php echo $uname?>&&rty=m'><span>Monthly</span></a></li>
<li><a href='report.php?rt=<?php echo $uname?>&&rty=y'><span>yearly</span></a></li>
<li><a href='repo-sec.php?rt=<?php echo $uname?>'><span>Class payment</span></a></li>
</ul>
</li>

<li class='has-sub '><a href='trans.php?rt=<?php echo $uname?>#main01'><span>Transaction</span></a>
<ul>
<li><a href='trans.php?rt=<?php echo $uname?>&t=Income#main01'>Income</a></li>
<li><a href='trans.php?rt=<?php echo $uname?>&t=Expense#main01'>Expense</a></li>
</ul>
</li>
<li><a href='trset.php?rt=<?php echo $uname?>'><span>Transaction Setting</span></a></li>
<li><a href='admin.php?rt=<?php echo $uname?>'><span>Admin. Setting</span></a></li>
<li><a href="rslt.php?rt=<?php echo $uname?>"><span>Result</span></a></li>

<li class='has-sub '><a href=''><span>Presence</span></a>
<ul>
<li><a href='prs.php?rt=<?php echo $uname?>#main01'>Add</a></li>
<li><a href='prs.php?rt=<?php echo $uname?>&ex=21#main01'>View</a></li>
</ul>
</li>
</ul>
