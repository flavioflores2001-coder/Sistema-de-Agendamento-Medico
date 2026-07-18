# Banco de Dados

## usuarios

Responsável pela autenticação dos usuários do sistema.

Relacionamentos:

- medicos

---

## medicos

Armazena os dados profissionais dos médicos.

Relacionamentos:

- usuarios
- consultas

---

## pacientes

Armazena os dados cadastrais dos pacientes.

Relacionamentos:

- consultas

---

## consultas

Controla o agendamento das consultas.

Relacionamentos:

- pacientes
- medicos
- atendimentos

---

## atendimentos

Registra todas as informações clínicas da consulta.

Relacionamentos:

- consultas
- receitas
- atestados

---

## receitas

Documento da receita médica.

Relacionamentos:

- atendimento
- itens_receita

---

## itens_receita

Medicamentos da receita.

---

## atestados

Documento de afastamento do paciente.