import os

val = os.popen('curl "http://localhost:8081/msi/token?resource=https://management.azure.com&api-version=2017-09-01" -H secret:46D0CA2148D045E4AFCBE7ACF98F1C56').read()

print(val)
