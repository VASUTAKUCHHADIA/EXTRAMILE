var navBar = document.querySelector('#navBar');
const pres = navBar.getAttribute('data-sel');
const  vis = navBar.getAttribute('data-vis');
navBar.innerHTML = `
<img src="https://i.ibb.co/J32W5QH/exm-dribbble-4x-removebg-preview-1.png" class="logo">
			<ul>
				<li><a href="${(pres=='home')?'#':'index.php'}" ${(pres=='home')?'class="sel"':""} >Home</a></li>
				<li><a href="${(pres=='services')?'#':'#ser'}" ${(pres=='services')?'class="sel"':""} >services</a></li>
				<li><a href="${(pres=='about')?'#':'about.php'}" ${(pres=='about')?'class="sel"':""} >about</a></li>
				<li><a href="${(pres=='Contact_Us')?'#':'#foot'}" ${(pres=='Contact us')?'class="sel"':""}>Contact Us</a></li>
				<li><a href="${(pres=='location')?'#':'location.php'}" ${(pres=='Location')?'class="sel"':""} >Location</a></li>
				${(vis=='true')?'<li><a href="login.php">sign in</a></li>':''}
			</ul>
`