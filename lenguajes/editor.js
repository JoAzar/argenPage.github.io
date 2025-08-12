let pyodide = await loadPyodide(); //API de python

document.getElementById("run-btn-recargar").addEventListener("click", () => {
  location.reload();
});

document.getElementById("run-btn").addEventListener("click", async () => {
  const code = document.getElementById("code").value;
  const output = document.getElementById("output");

  output.textContent = "Ejecutando...";

  try {
    let capturedOutput = await pyodide.runPythonAsync(`
import sys
import io
buffer = io.StringIO()
sys.stdout = buffer
sys.stderr = buffer

${code}

buffer.getvalue()
`);
    output.textContent = capturedOutput || "Sin salida";
  } catch (err) {
    console.error("Error en ejecución:", err);
    output.textContent = "Error:\n" + err;
  }
});
