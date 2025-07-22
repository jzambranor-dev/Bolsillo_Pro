document.addEventListener('DOMContentLoaded', function () {
    const loginBtn = document.getElementById('loginBtn');

    if (!loginBtn) {
        console.warn('⚠️ Botón de login no encontrado');
        return;
    }

    loginBtn.addEventListener('click', async function () {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        try {
            const response = await fetch('/api/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ email, password })
            });

            const data = await response.json();

            if (response.ok) {
                alert('✅ ' + data.message);
                window.location.href = '/'; // cambia a donde quieras redirigir
            } else {
                alert('❌ ' + data.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('❌ Error en la solicitud');
        }
    });
});
