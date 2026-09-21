import json
import requests

url = "http://example.com/api"
payload = {
    "jsonrpc": "2.0",
    "method": "hello",
    "params": ["John"],
    "id": 1
}
headers = {"Content-Type": "application/json"}
response = requests.post(url, headers=headers, data=json.dumps(payload))
print(response.text)