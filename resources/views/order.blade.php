<table border="1">
  <tr>
    <th>ID 12333</th>
    <th>Book Id</th>
    <th>Customer Name</th>
    <th>Category</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Order At</th>
  </tr>
  @foreach($order as $orders)
  <tr>
    <td>{{$orders->id}}</td>
    <td>{{$orders->book_id}}</td>
    <td>{{$orders->customer_name}}</td>
    <td>{{$orders->quantity}}</td>
    <td>{{$orders->category}}</td>
    <td>RM{{$orders->price}}</td>
    <td>{{$orders->order_at}}</td>
    <!-- <td><a href={{"deleteUser/".$orders['id']}}>Delete</a></td>
    <td><a href={{"updateUser/".$orders['id']}}>Update</a></td> -->
  </tr>
  @endforeach
</table>

<style>
    .w-5{
        display: none
    }
</style>

<span>
    {{$order->links()}}
</span>