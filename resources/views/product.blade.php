<x-layout>
	<x-slot name="title">
		Product Page
	</x-slot>
		<x-slot name="pageTitle">
		Product Page
	</x-slot>
	<main class="min-h-screen bg-gray-200 flex flex-col lg:flex-row">
		<div class="lg:w-1/2 bg-gray-300 ">
			<form action="" class="p-10 space-y-3" method="POST">
				@csrf
				<div class="flex flex-col">
					<label for="">Category</label> 
						<input name="category" id="products" class="h-10 border rounded border-black px-2">
						@error('category')
							<span class="text-red-600 font-light">{{$message}}</span>
						@enderror 
						
				</div>
					<div class="flex flex-col">
						<label for="Title">Title</label>
						<input type="text" placeholder="" name="title" class=" h-10 border rounded border-black">
						@error('title')
							<span class="text-red-600 font-light">{{$message}}</span>
						@enderror 
					</div>
					<div class="flex flex-col">
						<label for="Description">Description</label>
						<input name="description" id="description" type="text" class="h-10 border rounded border-black p-2">
						@error('description')
							<span class="text-red-600 font-light">{{$message}}</span>
						@enderror 
					</div>
					<div class="flex flex-col">
						<label for="Price">Price</label>
						<input type="number" name="price" class="border rounded border-black">
						@error('price')
							<span class="text-red-600 font-light">{{$message}}</span>
						@enderror 
					</div>
					<div>
						<button class="bg-black text-white p-3 rounded" type="submit">
							Submit
						</button>
					</div>
			</form>
		</div>
		<div class="lg:w-1/2">
			<div class="my-10 py-5 mx-5">
			<table class=" w-full table-auto">
				<thead class="bg-gray-400">
						<th class="px-4 py-2">ID</th>
						<th class="px-4 py-2">Category</th>
						<th class="px-4 py-2">Product Title</th>
						<th class="px-4 py-2">Description</th>
						<th class="px-4 py-2">Price</th>
						<th class="px-4 py-2">Actions</th>
				</thead>
				<tbody class="text-center">
					@foreach ($products as $pro)
						<tr>
							<th class="border border-gray-400 px-2 py-2">{{$pro->id}}</th>
							<td class="border border-gray-400 px-2 py-2">{{$pro->cat}}</td>
							<td class="border border-gray-400 px-2 py-2">{{$pro->title}}</td>
							<td class="border border-gray-400 px-2 py-2">{{$pro->description}}</td>
							<td class="border border-gray-400 px-2 py-2">{{$pro->price}}</td>
							<td class="border border-gray-400 px-2 py-2">
							<a href="{{url('/edit', $pro->id)}}" class="bg-white"><i class="bi bi-pencil-square text-green-600 text-2xl"></i></a>
							<a href="{{url('/delete', $pro->id)}}" class="bg-white"><i class="bi bi-trash-fill text-red-700 text-2xl"></i></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</main>

</x-layout>

