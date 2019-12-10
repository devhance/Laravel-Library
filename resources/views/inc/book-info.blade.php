<h2 class="ui dividing header">Book Information</h2>
    <div class="row">
        <div class="col s12 m6">
            <table class="ui definition table">
                <tbody>
                    <tr>
                        <td class="two wide column">Title</td>
                        <td>{{ $book->name }}</td>
                    </tr>
                    <tr>
                        <td>Author</td>
                        <td>{{ $book->author }}</td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>{{ $book->category }}</td>
                    </tr>
                    <tr>
                        <td>Book ID</td>
                        <td>{{ $book->id }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col s12 m6">
            <table class="ui definition table">
                <tbody>
                    <tr>
                        <td class="two wide column">Remaining</td>
                        <td>{{ $book->available }}</td>
                    </tr>
                    <tr>
                        <td>Defective</td>
                        <td>{{ $book->defective }}</td>
                    </tr>
                    <tr>
                        <td>Lost</td>
                        <td>{{ $book->lost }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ $book->status }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h4 class="ui horizontal divider header white">
        Description
    </h4>
    <p>
        {{  $book->description }}
    </p>