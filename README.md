# Banque Unity and CyberShield AI

## Résumé

Ce projet porte sur la conception et le développement d'un système intelligent de détection des anomalies et de réponse automatisée aux menaces dans un environnement bancaire simulé.

Une étude comparative a été menée sur quatre algorithmes de détection d'anomalies : Isolation Forest, One-Class Support Vector Machine (One-Class SVM), Autoencoder et Local Outlier Factor (LOF). À l'issue de l'évaluation expérimentale, le modèle One-Class SVM a été retenu, avec un F1-Score de 0,9656 et un temps d'inférence inférieur à 2 ms, selon les résultats obtenus durant les tests.

L'architecture proposée intègre une API REST développée avec Flask afin d'assurer la communication entre l'application bancaire Banque Unity, développée en PHP, et le tableau de bord de cybersécurité CyberShield AI.

Le système vise à détecter et à traiter plusieurs catégories de menaces, notamment les attaques par déni de service distribué (DDoS), les tentatives de connexion par force brute, les injections SQL et les opérations bancaires frauduleuses.

**Mots-clés :** Cybersécurité, détection d'anomalies, apprentissage automatique, One-Class SVM, API REST, Flask, PHP, sécurité bancaire.

## Abstract

This project focuses on the design and development of an intelligent anomaly detection and automated threat response system within a simulated banking environment.

Four anomaly detection algorithms were evaluated: Isolation Forest, One-Class Support Vector Machine (One-Class SVM), Autoencoder, and Local Outlier Factor (LOF). Based on the experimental evaluation, One-Class SVM was selected, achieving an F1-score of 0.9656 and an inference time below 2 ms.

The proposed architecture integrates a Flask-based REST API to facilitate communication between the PHP-based Banque Unity banking application and the CyberShield AI cybersecurity dashboard.

The system aims to detect and respond to several categories of threats, including Distributed Denial of Service (DDoS), brute-force login attempts, SQL injection, and banking fraud.

**Keywords:** Cybersecurity, anomaly detection, machine learning, One-Class SVM, REST API, Flask, PHP, banking security.

## 1. Project Objectives

The main objectives of this project are:

- To evaluate and compare machine learning algorithms for anomaly detection.
- To integrate an anomaly detection model into a simulated banking environment.
- To develop an API for communication between the banking application and the cybersecurity dashboard.
- To implement detection and response mechanisms for selected security threats.
- To evaluate the performance of the selected model using experimental metrics.

## 2. Technologies and Tools

- Python
- Flask
- Machine learning and scikit-learn
- PHP
- SQL and MySQL
- HTML, CSS and JavaScript

## 3. Project Structure

- `Banque-Unity/`: simulated banking web application.
- `CyberShield-AI/`: cybersecurity monitoring dashboard.

## 4. Scope and Limitations

This project is intended for educational and experimental purposes. The reported performance metrics correspond to the tests conducted in the project environment and should not be interpreted as a guarantee of effectiveness in a production banking infrastructure.

## Author

Walid Sabri

Bachelor's Degree in Networks, Cloud Computing and Cybersecurity (RCC)

École Supérieure de Technologie, El Kelâa des Sraghna

Université Cadi Ayyad
