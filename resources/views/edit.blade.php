<x-layout>
	<x-slot name="title">
		edit products
	</x-slot>
		<x-slot name="pageTitle">
		Edit Page
	</x-slot>
	<main class="min-h-screen bg-gray-200">
	<div class="lg:w-1/2 mx-auto bg-gray-300">
			<form action="" class="p-10 space-y-3" method="POST">
				@csrf
				<div class="flex flex-col">
					<label for="">Categary</label> 
						<input name="category" id="products" class="h-10 border rounded border-black px-2" value="{{$products->cat}}">
				</div>
					<div class="flex flex-col">
						<label for="Title">Title</label>
						<input type="text" placeholder="" name="title" class=" h-10 border rounded border-black" value="{{$products->title}}">
					</div>
					<div class="flex flex-col">
						<label for="Description">Description</label>
						<input name="description" id="description" type="text" class="h-10 border rounded border-black p-2" cols="5" rows="5" value="{{$products->description}}">
					</div>
					<div class="flex flex-col">
						<label for="Price">Price</label>
						<input type="number" name="price" value="{{$products->price}}" class="border rounded border-black">
					</div>
					<div>
						<button class="bg-black text-white p-3 rounded" type="submit">
							Update
						</button>
					</div>
			</form>
		</div>



	</main>




</x-layout>