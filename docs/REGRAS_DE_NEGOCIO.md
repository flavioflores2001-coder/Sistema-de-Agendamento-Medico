# Regras de Negócio

## Login

- Apenas usuários cadastrados podem acessar.
- A senha deve ser criptografada utilizando password_hash().

---

## Pacientes

- CPF deve ser único.
- Email é opcional.
- Telefone é opcional.

---

## Consultas

- Toda consulta deve possuir um paciente.
- Toda consulta deve possuir um médico.
- O status inicial é "Agendada".

---

## Atendimento

- Apenas médicos podem finalizar um atendimento.
- Ao finalizar, o status da consulta muda para "Finalizada".

---

## Receitas

- Uma receita pode possuir vários medicamentos.

---

## Atestados

- Todo atestado pertence a um atendimento.