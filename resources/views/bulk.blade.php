<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body class="g-sidenav-show bg-gray-100">
    @include('layouts.aside')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        @include('layouts.Adminnavbar')

        <div class="container-fluid py-4">
            @if(session('success'))
                <div class="alert alert-success text-white">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger text-white">{{ session('error') }}</div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger text-white">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6>Send Bulk SMS</h6>
                            <p class="text-sm text-muted mb-0">Send messages manually, to all imported contacts, or to selected phone numbers.</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('sms.send.bulk') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Sender ID</label>
                                        <input type="text" name="sender_id" class="form-control" value="{{ old('sender_id', 'Kaukamedic') }}" maxlength="11" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Send Mode</label>
                                        <select name="send_mode" class="form-control">
                                            <option value="manual" {{ old('send_mode') === 'manual' ? 'selected' : '' }}>Manual</option>
                                            <option value="imported_all" {{ old('send_mode') === 'imported_all' ? 'selected' : '' }}>All Imported Contacts</option>
                                            <option value="select_contacts" {{ old('send_mode') === 'select_contacts' ? 'selected' : '' }}>Selected Numbers</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Manual Contact Name</label>
                                        <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}" placeholder="Optional">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Manual Phone Number</label>
                                        <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number') }}" placeholder="07xxxxxxxx or 255xxxxxxxxx">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Selected Phone Numbers</label>
                                        <input type="text" name="selected_phone_numbers" class="form-control" value="{{ old('selected_phone_numbers') }}" placeholder="Comma-separated phone numbers">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Message</label>
                                        <textarea name="message" rows="5" class="form-control" required>{{ old('message') }}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn bg-gradient-dark mb-0">Send SMS</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Contacts Summary</h6>
                        </div>
                        <div class="card-body">
                            <h3 class="mb-1">{{ $total }}</h3>
                            <p class="text-sm text-muted mb-0">Imported contacts available for SMS campaigns.</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Import Contacts</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('vcard.upload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">CSV / XLSX File</label>
                                    <input type="file" name="vcard_file" class="form-control" accept=".csv,.xlsx">
                                </div>
                                <button type="submit" class="btn btn-outline-dark mb-0">Upload File</button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header pb-0">
                            <h6>Add Single Contact</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('vcard.upload') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="full_name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" name="phone_number" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Organization</label>
                                    <input type="text" name="organization" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Job Title</label>
                                    <input type="text" name="job_title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea name="address" class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-primary mb-0">Save Contact</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6>Imported Contacts</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Phone</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($contacts as $contact)
                                            <tr>
                                                <td class="px-3 py-2">{{ $contact->full_name ?: 'No name' }}</td>
                                                <td class="px-3 py-2">{{ $contact->phone_number ?: '-' }}</td>
                                                <td class="px-3 py-2">{{ $contact->email ?: '-' }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="px-3 py-3 text-muted">No contacts imported yet.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6>Sent Messages</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Receiver</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Message</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($messages as $message)
                                            <tr>
                                                <td class="px-3 py-2">{{ $message->receiver }}</td>
                                                <td class="px-3 py-2">{{ \Illuminate\Support\Str::limit($message->message, 50) }}</td>
                                                <td class="px-3 py-2">{{ $message->status }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="px-3 py-3 text-muted">No messages sent yet.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            {{ $messages->links() }}
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.adminfooter')
        </div>
    </main>
</body>
</html>
