<style>
	.hpeople {
		//padding-left: 5px;
		height: 700px;
	}
	
	.hpeopletitle {
		padding-left: 15px;
		padding-top: 15px;
		padding-bottom: 15px;
		font-size: 150%;
	}
	
	.hpeopleimg {
		cursor: pointer;
		border: 1px solid #BAD6D4;
		width: 120px;
		height: 100px;
		background-size: 100% 100%;
	}
	
	.hpeopleimg:hover {
		border: 2px solid orange;
	}
	
	.hplusimg {
		width: 40px;
		height: 40px;
		background-size: 100% 100%;
		cursor: pointer;
	}
	
	.hplusimg:hover {
		border: 1px solid #6633FF;
		border-radius: 50%;
	}
	
	.hplusimg:active {
		position: relative;
		top: 2px;
	}
	
	.hpeopleprofile {
		padding-bottom: 5px;
		font-size: 130%;
		font-weight: bold;
	}
	
	.hpeopleprofile:hover {
		cursor: pointer;
		text-decoration: underline;
	}
	
	.hpeoplemutualfriend {
		color: #9197B7;
	}
	
	.hpeoplemutualfriend:hover {
		cursor: pointer;
		text-decoration: underline;
	}
	
	.hpeople_table {
		border: none;
	}
	
	.hpeople_table td {
		border-top: 1px solid #BAD6D4;
	}
	
	.hpeople_showmore {
		border-top: 1px solid #BAD6D4;
		position: relative;
		top: -20px;
		padding: 15px;
		text-align: center;
	}
	
	.hpeople_showmore span:hover {
		text-decoration: underline;
	}
	
	.hdownimg {
		position: relative;
		top: -2px;
	}


</style>

<br>
<div class="hdiv hpeople">
<div class="hpeopletitle">
<strong>People You May Know</strong>
</div>
	<table class="hpeople_table" width="448px" height="100px" cellspacing="0">
		<tr>
		<td width="60px"><div class="hpeopleimg" style="background-image: url('comingsoon/images/as5.jpg');"></div></td>
		<td width="360px"><div class="hpeopleprofile">Arnold Schwarzenegger</div><div class="hpeoplemutualfriend">8 Mutual Friends</div></td>
		<td width="20px"><div class="hplusimg" style="background-image: url('comingsoon/images/plus.png');"></div></td>
		</tr>
		<tr>
		<td width="60px"><div class="hpeopleimg" style="background-image: url('comingsoon/images/ss3.jpeg');"></div></td>
		<td width="360px"><div class="hpeopleprofile">Sylvester Stallone</div><div class="hpeoplemutualfriend">19 Mutual Friends</div></td>
		<td width="20px"><div class="hplusimg" style="background-image: url('comingsoon/images/plus.png');"></div></td>
		</tr>
		<tr>
		<td width="60px"><div class="hpeopleimg" style="background-image: url('comingsoon/images/ew4.jpg');"></div></td>
		<td width="360px"><div class="hpeopleprofile">Emma Watson</div><div class="hpeoplemutualfriend">35 Mutual Friends</div></td>
		<td width="20px"><div class="hplusimg" style="background-image: url('comingsoon/images/plus.png');"></div></td>
		</tr>
		<tr>
		<td width="60px"><div class="hpeopleimg" style="background-image: url('comingsoon/images/cgm2.jpg');"></div></td>
		<td width="360px"><div class="hpeopleprofile">Chloë Grace Moretz</div><div class="hpeoplemutualfriend">27 Mutual Friends</div></td>
		<td width="20px"><div class="hplusimg" style="background-image: url('comingsoon/images/plus.png');"></div></td>
		</tr>
		<tr>
		<td width="60px"><div class="hpeopleimg" style="background-image: url('comingsoon/images/rdj1.jpg');"></div></td>
		<td width="360px"><div class="hpeopleprofile">Robert Downey Jr.</div><div class="hpeoplemutualfriend">164 Mutual Friends</div></td>
		<td width="20px"><div class="hplusimg" style="background-image: url('comingsoon/images/plus.png');"></div></td>
		</tr>
	</table>
	<div class="hpeople_showmore">
		<a href="#"><img class="hdownimg" src="comingsoon/images/icondown.png"  width="18" /> <span>Show More</span></a>
		<!--
		<div class="hdownimg" style="background-image: url('comingsoon/images/icondown.png');"></div>
		<div class="hshowmore">Show More</div>-->
	</div>
</div>





