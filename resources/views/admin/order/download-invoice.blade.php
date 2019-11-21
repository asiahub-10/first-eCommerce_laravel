<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Invoice</title>
    </head>

    <body>
        {{--<style>--}}
            {{--/* reset */--}}

            {{--*--}}
            {{--{--}}
                {{--border: 0;--}}
                {{--box-sizing: content-box;--}}
                {{--color: inherit;--}}
                {{--font-family: inherit;--}}
                {{--font-size: inherit;--}}
                {{--font-style: inherit;--}}
                {{--font-weight: inherit;--}}
                {{--line-height: inherit;--}}
                {{--list-style: none;--}}
                {{--margin: 0;--}}
                {{--padding: 0;--}}
                {{--text-decoration: none;--}}
                {{--vertical-align: top;--}}
            {{--}--}}

            {{--/* content editable */--}}

            {{--*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }--}}

            {{--*[contenteditable] { cursor: pointer; }--}}

            {{--*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }--}}

            {{--span[contenteditable] { display: inline-block; }--}}

            {{--/* heading */--}}

            {{--h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }--}}

            {{--/* table */--}}

            {{--table { font-size: 75%; table-layout: fixed; width: 100%; }--}}
            {{--table { border-collapse: separate; border-spacing: 2px; }--}}
            {{--th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }--}}
            {{--th, td { border-radius: 0.25em; border-style: solid; }--}}
            {{--th { background: #EEE; border-color: #BBB; }--}}
            {{--td { border-color: #DDD; }--}}

            {{--/* page */--}}

            {{--/*html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }*/--}}
            {{--/*html { background: #999; cursor: default; }*/--}}

            {{--/*body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }*/--}}
            {{--/*body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }*/--}}

            {{--/* header */--}}

            {{--header { margin: 0 0 3em; }--}}
            {{--header:after { clear: both; content: ""; display: table; }--}}

            {{--header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }--}}
            {{--header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }--}}
            {{--header address p { margin: 0 0 0.25em; }--}}
            {{--header span, header img { display: block; float: right; }--}}
            {{--header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }--}}
            {{--header img { max-height: 100%; max-width: 100%; }--}}
            {{--header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }--}}

            {{--/* article */--}}

            {{--article, article address, table.new-meta, table.inventory { margin: 0 0 3em; }--}}
            {{--article:after { clear: both; content: ""; display: table; }--}}
            {{--article h1 { clip: rect(0 0 0 0); position: absolute; }--}}

            {{--article address { float: left; font-size: 125%; font-weight: bold; }--}}

            {{--/* table new-meta & balance */--}}

            {{--table.new-meta, table.balance { float: right; width: 36%; }--}}
            {{--table.new-meta:after, table.balance:after { clear: both; content: ""; display: table; }--}}

            {{--/* table new-meta */--}}

            {{--table.new-meta th { width: 40%; }--}}
            {{--table.new-meta td { width: 60%; }--}}

            {{--/* table items */--}}

            {{--table.inventory { clear: both; width: 100%; }--}}
            {{--table.inventory th { font-weight: bold; text-align: center; }--}}

            {{--table.inventory td:nth-child(1) { width: 26%; }--}}
            {{--table.inventory td:nth-child(2) { width: 38%; }--}}
            {{--table.inventory td:nth-child(3) { text-align: center; width: 12%; }--}}
            {{--table.inventory td:nth-child(4) { text-align: center; width: 12%; }--}}
            {{--table.inventory td:nth-child(5) { text-align: center; width: 12%; }--}}

            {{--/* table balance */--}}

            {{--table.balance th, table.balance td { width: 50%; }--}}
            {{--table.balance td { text-align: center; }--}}

            {{--/* aside */--}}

            {{--aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }--}}
            {{--aside h1 { border-color: #999; border-bottom-style: solid; }--}}

            {{--/* javascript */--}}

            {{--.add, .cut--}}
            {{--{--}}
                {{--border-width: 1px;--}}
                {{--display: block;--}}
                {{--font-size: .8rem;--}}
                {{--padding: 0.25em 0.5em;--}}
                {{--float: left;--}}
                {{--text-align: center;--}}
                {{--width: 0.6em;--}}
            {{--}--}}

            {{--.add, .cut--}}
            {{--{--}}
                {{--background: #9AF;--}}
                {{--box-shadow: 0 1px 2px rgba(0,0,0,0.2);--}}
                {{--background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);--}}
                {{--background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);--}}
                {{--border-radius: 0.5em;--}}
                {{--border-color: #0076A3;--}}
                {{--color: #FFF;--}}
                {{--cursor: pointer;--}}
                {{--font-weight: bold;--}}
                {{--text-shadow: 0 -1px 2px rgba(0,0,0,0.333);--}}
            {{--}--}}

            {{--.add { margin: -2.5em 0 0; }--}}

            {{--.add:hover { background: #00ADEE; }--}}

            {{--.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }--}}
            {{--.cut { -webkit-transition: opacity 100ms ease-in; }--}}

            {{--tr:hover .cut { opacity: 1; }--}}

        {{--</style>--}}

        <div class="row">
            <div class="col-md-12">
                <div class="card m-1">
                    <div class="card-body">
                        <header>
                            <h1 style="background-color: #2c9faf; text-align: center; color: white;">Invoice</h1>
                            <div class="text-left">
                                <h4>Shipping Info</h4>
                                <address>
                                    <p>{{ $shipping->full_name }}</p>
                                    <p>{{ $shipping->address }}</p>
                                    <p>{{ $shipping->phone_number }}</p>
                                </address>
                            </div>
                            <div style="text-align: right;">
                                <h4>Billing Info</h4>
                                <address>
                                    <p>{{ $customer->first_name.' '.$customer->last_name }}</p>
                                    <p>{{ $customer->address }}</p>
                                    <p>{{ $customer->phone_number }}</p>
                                </address>
                            </div>
                            <span><img alt="" src="{{ asset('/') }}admin/img/logo.png"><input type="file" accept="image/*"></span>
                        </header>
                        <article>
                            <h1>Recipient</h1>
                            <address>
                                <p>Some Company<br>c/o Some Guy</p>
                            </address>
                            <table class="new-meta">
                                <tr>
                                    <th><span>Invoice #</span></th>
                                    <td><span>0000{{ $order->id }}</span></td>
                                </tr>
                                <tr>
                                    <th><span>Date</span></th>
                                    <td><span>{{ $order->created_at }}</span></td>
                                </tr>
                                <tr>
                                    <th><span>Amount Due</span></th>
                                    <td><span>TK.</span><span>{{ $order->order_total }}</span></td>
                                </tr>
                            </table>
                            <table class="inventory">
                                <thead>
                                <tr>
                                    <th><span>Item</span></th>
                                    <th><span>Description</span></th>
                                    <th><span>Rate</span></th>
                                    <th><span>Quantity</span></th>
                                    <th><span>Price</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($sum = 0)
                                @foreach($orderDetails as $orderDetail)
                                    <tr>
                                        <td><span>{{ $orderDetail->product_name }}</span></td>
                                        <td><span>Experience Review</span></td>
                                        <td><span>TK. </span><span>{{ $orderDetail->product_price }}</span></td>
                                        <td><span>{{ $orderDetail->product_quantity }}</span></td>
                                        <td><span>TK. </span><span>{{ $total = $orderDetail->product_price*$orderDetail->product_quantity }}</span></td>
                                    </tr>
                                    @php($sum = $sum + $total)
                                @endforeach
                                </tbody>
                            </table>
                            {{--<a class="add">+</a>--}}
                            <table class="balance">
                                <tr>
                                    <th><span>Total</span></th>
                                    <td><span>TK.</span><span>{{ $sum }}</span></td>
                                </tr>
                            </table>
                        </article>
                        <aside>
                            <h1><span>Additional Notes</span></h1>
                            <div>
                                <p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>