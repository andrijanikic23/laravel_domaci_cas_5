
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Amount</th>
        <th>Price</th>
    </tr>
    @foreach ($all_products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->amount }}</td>
        <td>{{ $product->price }} RSD</td>
    </tr>
    @endforeach
</table>