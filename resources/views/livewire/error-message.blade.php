<div class="p-4 rounded-md 
    {{ $type === 'error' ? 'bg-red-500 text-white' : 'bg-green-500 text-white' }}">
    <strong>{{ $type === 'error' ? 'Error' : 'Success' }}:</strong> {{ $message }}
</div>