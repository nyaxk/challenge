# Documentação
## Listar todos úsuarios
Endpoint: /api/users

Método: GET

Tipo de retorno: JSON ARRAY

Retorno: `Nome`, `CPF`, `Número de telefone`, `Email`, `Data de criação da conta`, `Data da última atualização`

##Lista úsuarios por Nome ou ID da conta
Endpoint: /api/users/{nome_ou_id}

Método: GET

Tipo de retorno: JSON ARRAY

Retorno: `Nome`, `CPF`, `Número de telefone`, `Email`, `Data de criação da conta`, `Data da última atualização`

#Lista todas contas
Endpoint: /api/accounts

Método: GET

Tipo de retorno: JSON ARRAY

Retorno: `Agência`, `Número`, `Dígito`, `Razão Social`, `Nome Fantasia`, `CNPJ`, `Tipo de conta`

#Lista conta com todas informações
Endpoint: /api/accounts/{id}

Método: GET

Tipo de retorno: JSON ARRAY

Retorno: `Agência`, `Número`, `Dígito`, `Razão Social`, `Nome Fantasia`, `CNPJ`, `Tipo de conta`, `Úsuario`, `Transações`
