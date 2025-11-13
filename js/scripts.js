// Beam Calculator Logic
document.addEventListener('DOMContentLoaded', function() {
    const calculatorForm = document.getElementById('beam-calculator-form');
    if (calculatorForm) {
        const inputs = calculatorForm.querySelectorAll('input');

        function calculateBeam() {
            const h = parseFloat(document.getElementById('beamHeight').value) / 1000; // m
            const b = parseFloat(document.getElementById('flangeWidth').value) / 1000; // m
            const s = parseFloat(document.getElementById('webThickness').value) / 1000; // m
            const t = parseFloat(document.getElementById('flangeThickness').value) / 1000; // m

            if (isNaN(h) || isNaN(b) || isNaN(s) || isNaN(t)) {
                return;
            }

            const steelDensity = 7850; // kg/m^3
            const pricePerKg = 120; // Example price per kg in RUB

            // Calculate volume of 1 meter of beam
            const webVolume = (h - 2 * t) * s * 1;
            const flangeVolume = b * t * 1 * 2;
            const totalVolume = webVolume + flangeVolume;

            const weight = totalVolume * steelDensity;
            const cost = weight * pricePerKg;

            // Simplified saving calculation (example)
            const rolledBeamWeight = weight * 1.15; // Assume rolled beam is 15% heavier
            const saving = ((rolledBeamWeight - weight) / rolledBeamWeight) * 100;

            document.getElementById('result-weight').textContent = weight.toFixed(2);
            document.getElementById('result-cost').textContent = cost.toFixed(2);
            document.getElementById('result-saving').textContent = saving.toFixed(1);
        }

        inputs.forEach(input => {
            input.addEventListener('input', calculateBeam);
        });

        // Initial calculation
        calculateBeam();
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
