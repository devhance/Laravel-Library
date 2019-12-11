<div class="field">
        <label>Book Title</label>
        <input type="text" name="name" placeholder="Book Title" autocomplete="off" value="{{ old('name') ??  $book->name }}">
    </div>
    <div class="two fields">
        <div class="field">
            <label>Author</label>
            <input type="text" name="author" autocomplete="off" placeholder="Author" value="{{ old('author') ?? $book->author  }}">
        </div>
        <div class="field">
            <label>Category</label>
            <select class="ui fluid search dropdown" name="category">
                <option>&nbsp;</option>
                <option value="Science" {{ old('category') ?? $book->category == 'Science' ? 'selected' : '' }}>Science</option>
                <option value="Mathematics" {{ old('category') ?? $book->category == 'Mathematics' ? 'selected' : '' }}>Mathematics</option>
                <option value="History" {{ old('category') ?? $book->category == 'History' ? 'selected' : '' }}>History</option>
                <option value="Novel" {{ old('category') ?? $book->category == 'Novel' ? 'selected' : '' }}>Novel</option>
            </select>
        </div>
    </div>

    <div class="three fields">
        <div class="field">
            <label>Available</label>
            <input type="number" name="available" value="{{ old('available') ?? $book->available }}">
        </div>
        <div class="field">
            <label>Defective / Destroyed</label>
            <input type="number" name="defective" value="{{ old('defective') ?? $book->defective }}">
        </div>
        <div class="field">
            <label>Lost / Unreturned</label>
            <input type="number" name="lost" value="{{ old('lost') ?? $book->lost }}">
        </div>
    </div>
    <div class="field">
        <label>Description</label>
        <textarea name="description" placeholder="Write a short description or preview.">{{ old('description') ?? $book->description }}</textarea>
    </div>