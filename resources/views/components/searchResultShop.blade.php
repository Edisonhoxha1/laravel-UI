<div class="acceories flex flex-col md:flex-row lg:justify-between mb-36">
    <div class="acceories-result">
        <p class="ecommerce-acceories text-xl">Ecommerce Acceories & Fashion item</p>
        <p class="acceories-category text-xs pt-2">About 9,620 results (0.62 seconds)</p>
    </div>
    <div class="acceories-category flex flex-col md:flex-row lg:justify-end text-base mt-2">
        <form class="input-search" action="" method="GET">
            <div class="page-nr pr-7 mb-7 md:mb-0 lg:mb-0">
                <label for="page">Per Page:</label>
                <input type="text" name="perPage" class="border-2 border-gray-100 w-14 h-6">
            </div>
        </form>
        <form class="input-search" action="" method="GET">
            <div class="sort-by pr-7 mb-7 md:mb-0 lg:mb-0">
                <label for="sort">Sort By:</label>
                <select class="dropdown-sort bg-transparent border-2 border-gray-100 w-24 h-7 text-xs"><a href="#" class="sort"></a>
                    <option class="bg-transparent text-xs" value="Best Match">Best Match</option>
                    <option class="bg-transparent text-xs" value="Best Match">Chair</option>
                    <option class="bg-transparent text-xs" value="Best Match">Bag</option>
                    <option class="bg-transparent text-xs" value="Best Match">Armchair</option>
                </select>
            </div>
        </form>
        <form class="input-search" action="" method="GET">
            <div class="view">
                <label for="view">View:</label><a href="gridDefault"><i class="fa fa-th-large px-1.5" aria-hidden="true"></i></a><a href="../shopList"><i class="fa fa-list pr-6" aria-hidden="true"></i></a>
                <input type="text" class="border-2 border-gray-100 w-40 h-7" name="search" value="{{ request()->query('search') }}">
            </div>
        </form>
    </div>
</div>
