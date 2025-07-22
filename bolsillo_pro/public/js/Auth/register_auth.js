document.getElementById('registerBtn').addEventListener('click', async () => {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const passwordConfirmation = document.getElementById('password_confirmation').value;

    try {
        const response = await fetch('/api/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')

            },
            body: JSON.stringify({
                name,
                email,
                password,
                password_confirmation: passwordConfirmation
            })
        });

        const data = await response.json();

        if (response.ok) {
            alert('✅ ' + data.message);
            // Redirige o limpia el formulario
        } else {
            console.error(data.errors);
            alert('❌ Registro fallido');
        }
    } catch (error) {
        console.error('Error en el registro:', error);
    }
});
