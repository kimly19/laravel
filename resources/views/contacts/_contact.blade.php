<tr @if($loop->even) class="table-primary" @endif>
    <th scope="row">{{ $contact->id }}</th>
    <td>{{ $contact->first_name }}</td>
    <td>{{ $contact->last_name }}</td>
    <td>{{ $contact->email }}</td>
    <td>{{ $contact->company->name }}</td>
    <td width="150">
        <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-outline-light"
            style="color: orangered;" title="Show">
            <i class="bi bi-eye-fill"></i>
        </a>
        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-outline-light" title="Edit"
            style="color: orangered;">
            <i class="bi bi-pencil-square"></i>
        </a>
        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
            onsubmit="return confirm('Are you sure?')" style="display:inline">
            @csrf
            @method('delete')
            <button type="submit" class=" btn btn-sm btn-outline-light" title="Delete" style="color: orangered;">
                <i class="bi bi-x-circle"></i>
            </button>
        </form>
    </td>
</tr>