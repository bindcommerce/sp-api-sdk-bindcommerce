# Configurazione del generatore SP-API SDK

## Struttura del file YAML

Ogni API ha un file di configurazione in `config/generator-<nome>.yaml` con questa struttura:

```yaml
generatorName: php
templateDir: sp-api/resources/php-amazon-selling-partner-api
additionalProperties:
  invokerPackage: AmazonPHP\SellingPartner
  srcBasePath: src/AmazonPHP/SellingPartner
  modelPackage: Model\<NomeModello>
  packageName: <NomePackage>
  useTags: false                      # opzionale
  className: <NomeNamespace>          # opzionale (richiede useTags: false)
files:
  api.mustache:
    templateType: API
    destinationFilename: /<NomePackage>SDK.php
  api_interface.mustache:
    templateType: API
    destinationFilename: /<NomePackage>SDKInterface.php
```

## Proprietà personalizzabili

### `packageName`

Nome del package usato nei template per la classe SDK generata. Determina il nome della classe e il nome del file di output.

| Valore | Classe generata | File |
|---|---|---|
| `Orders` | `OrdersSDK`, `OrdersSDKInterface` | `OrdersSDK.php`, `OrdersSDKInterface.php` |
| `OrdersV2026` | `OrdersV2026SDK`, `OrdersV2026SDKInterface` | `OrdersV2026SDK.php`, `OrdersV2026SDKInterface.php` |

### `modelPackage`

Sotto-namespace per i modelli generati. Si riflette nel path dei file modello.

| Valore | Namespace modelli |
|---|---|
| `Model\Orders` | `AmazonPHP\SellingPartner\Model\Orders` |
| `Model\OrdersV2026` | `AmazonPHP\SellingPartner\Model\OrdersV2026` |

### `useTags` (opzionale — default: `true`)

Controlla se il generatore deve derivare il nome della classe API (`{{classname}}`) dal tag definito nella specifica OpenAPI.

- Se **non impostato** (o `true`): il namespace della classe viene derivato dal tag della spec.
- Se `false`: il tag viene ignorato e il namespace viene preso dalla proprietà `className`.

Va usato in combinazione con `className` quando si vuole forzare un namespace diverso dal tag.

> **Nota:** il **path del file** generato su disco (la directory sotto `Api/`) è **sempre** determinato dal tag della spec OpenAPI e **non è modificabile** tramite il file YAML. `useTags` e `className` influenzano esclusivamente il valore di `{{classname}}` usato nei template (namespace PHP), non la posizione del file sul filesystem.

### `className` (opzionale — richiede `useTags: false`)

Imposta esplicitamente il valore di `{{classname}}` usato nei template Mustache, che determina il **namespace** della classe API generata.

Questo è utile quando il tag della spec non corrisponde al namespace desiderato.

#### Esempio: senza `useTags` / `className`

Config (`generator-aplus.yaml`):
```yaml
additionalProperties:
  packageName: APlus
  # useTags e className non definiti
```

Se il tag nella spec OpenAPI è `aplusContent`, il file generato avrà:

```php
namespace AmazonPHP\SellingPartner\Api\AplusContent;
```

Il namespace è controllato dal tag della spec.

#### Esempio: con `useTags: false` e `className`

Config (`generator-ordersV2026.yaml`):
```yaml
additionalProperties:
  packageName: OrdersV2026
  useTags: false
  className: OrdersV2026
```

Anche se il tag nella spec OpenAPI è `getOrder`, il file generato avrà:

```php
namespace AmazonPHP\SellingPartner\Api\OrdersV2026;
```

Il namespace è controllato dal YAML, indipendentemente dal tag.

Tuttavia il file resterà nella directory `Api/GetOrderApi/` (determinata dal tag), quindi il path su disco **non** corrisponderà al namespace.

## Quando usare `useTags: false` e `className`

- **Non servono** se il tag della spec produce già il namespace corretto (la maggior parte dei casi).
- **Servono** quando si genera da una spec il cui tag non corrisponde al namespace voluto (es. una nuova versione di un'API che condivide lo stesso tag della versione precedente).

## Aggiungere una nuova API

1. Creare `config/generator-<nome>.yaml` seguendo la struttura sopra.
2. Aggiungere lo step in `bin/generate.sh`:
   - Definire la funzione `step_<nome>()` con la chiamata a `run_generator`.
   - Aggiungere `<nome>` all'array `ALL_STEPS`.
3. Se la spec richiede download preventivo, creare anche uno step `step_download_<nome>()`.

## Esecuzione selettiva

Lo script `bin/generate.sh` supporta l'esecuzione selettiva:

```bash
./bin/generate.sh                    # esegue tutto
./bin/generate.sh orders feeds       # esegue solo gli step indicati
./bin/generate.sh ordersV2026        # auto-scarica la spec se mancante
./bin/generate.sh --list             # mostra gli step disponibili
./bin/generate.sh --help             # mostra l'help
```
