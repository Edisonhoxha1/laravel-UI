<nav class="flex items-center justify-between flex-wrap bg-white py-4 lg:px-28">
	<div class="flex justify-between lg:w-auto w-full lg:border-b-0 pr-2 border-solid border-b-2 border-gray-300 pb-5 lg:pb-0">
		<div class="flex items-center flex-shrink-0 text-gray-800 mr-16">
			<span class="font-sans f tracking-tight text-3xl">Hekto</span>
		</div>
		<div class="block lg:hidden">
			<button id="nav" class="flex items-center px-3 py-2 border-2 rounded text-blue-700 border-blue-700 hover:text-blue-700 hover:border-blue-700">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
				</svg>
			</button>
		</div>
	</div>
	<div class="menu w-full flex-grow lg:flex lg:items-center lg:w-auto ">
		<div class="text-md font-bold text-blue-700 lg:flex-grow">
			<select id="myList" onchange="favTutorial()" >
				<option value="Home" class="home"><a href="#" class="text-gray-700 text-base mt-4 lg:inline-block lg:mt-0 py-2 mr-2">Home</a></option>
				<option value="Shop Grid Default"><a href="#" class="text-gray-700 text-base mt-4 lg:inline-block lg:mt-0 py-2 mr-2">Shop</a></option>
				<option value="Home" class="home"><a href="#" class="text-gray-700 text-base mt-4 lg:inline-block lg:mt-0 py-2 mr-2">Home</a></option>
			</select>
			<a href="#" class="text-gray-700 text-base block mt-4 lg:inline-block lg:mt-0 px-4 py-2 mr-2">
				Pages
			</a>
			<a href="#" class="text-gray-700 text-base block mt-4 lg:inline-block lg:mt-0 px-4 py-2 mr-2">
				Products
			</a>
			<a href="#" class="text-gray-700 text-base block mt-4 lg:inline-block lg:mt-0 px-4 py-2 mr-2">
				Blog
			</a>
			<a href="#" class="text-gray-700 text-base block mt-4 lg:inline-block lg:mt-0 px-4 py-2 mr-2">
				Shop
			</a>
			<a href="#" class="text-gray-700 text-base block mt-4 lg:inline-block lg:mt-0 px-4 py-2 mr-2">
				Contact
			</a>
		</div>
		<div class="header-search relative mx-auto text-gray-600 lg:block hidden">
			<input class="border-2 border-gray-200 bg-white h-10 pl-2 pr-8 text-sm w-72" type="search" name="search">
			<button type="submit" class="search-button h-full w-12 absolute right-0 top-0">
				<svg class="text-white h-5 w-5 fill-current mr-0 inline-block" xmlns="http://www.w3.org/2000/svg" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
					<path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
				</svg>
			</button>
		</div>
	</div>
</nav>

<script>
    function favTutorial() {  
        var mylist = document.getElementById("myList");  
        document.getElementById("favourite").value = mylist.options[mylist.selectedIndex].text;  
    }  
</script>